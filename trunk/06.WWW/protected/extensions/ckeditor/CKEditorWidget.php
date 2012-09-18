<?php
/**
 * $this->widget('ext.ckeditor.CKEditorWidget',array('name'=>'test','toolbar'=>array(array('Source','-','Bold','Italic'))));
 * $this->widget('ext.ckeditor.CKEditorWidget',array('name'=>'test','toolbar'=>'test','toolbarSet'=>array(array('Source','-','Bold','Italic'))));
 * $this->widget('ext.ckeditor.CKEditorWidget',array('name'=>'test','isNeedUpload'=>true));
 */
class CKEditorWidget extends CInputWidget
{
	public $height="350px";
	public $width="95%";

	public $toolbar;//Basic Full array(array('Source','-','Bold','Italic'))
	public $toolbarSet;//array(array('Source','-','Bold','Italic'))
	public $skin;//v2 kama office2003
	public $onready;
	public $isNeedUpload=false;

	//如果为空，则用自带assets里的文件
	public $ckeditorUrl;
	public $ckfinderUrl;

	public $options=array();

	public function init() {
		list($name,$id)=$this->resolveNameID();
		if(isset($this->htmlOptions['id']))
			$id=$this->htmlOptions['id'];
		else
			$this->htmlOptions['id']=$id;
		if(isset($this->htmlOptions['name']))
			$name=$this->htmlOptions['name'];
		else
			$this->htmlOptions['name']=$name;


		$this->registerClientScript();

		if($this->hasModel()) {
			echo CHtml::activeTextArea($this->model,$this->attribute,$this->htmlOptions);
		} else {
			echo CHtml::textArea($name,$this->value,$this->htmlOptions);
		}
	}

	public function registerClientScript()
	{
		$id=$this->htmlOptions['id'];

		$options=$this->getClientOptions();

		//	publish  assets folder
		$ckeditorUrl = $this->ckeditorUrl;
		if ($ckeditorUrl === null) {
			$ckeditorUrl = Yii::app()->getAssetManager()->publish(dirname(__FILE__).'/assets/ckeditor');
		}
		$cs=Yii::app()->getClientScript();
		$cs->registerCoreScript('jquery');
		$cs->registerScriptFile($ckeditorUrl.'/ckeditor.js');

		$js="CKEDITOR.replace('{$id}',$options);";
		if ($this->onready!==null) {
			$js.="\nCKEDITOR.on('instanceReady', {$this->onready});";
		}
		if ($this->isNeedUpload) {
			$ckfinderUrl = $this->ckfinderUrl;
			if ($ckfinderUrl === null) {
				$ckfinderUrl = Yii::app()->getAssetManager()->publish(dirname(__FILE__).'/assets/ckfinder');
			}
			$cs->registerScriptFile($ckfinderUrl.'/ckfinder.js');
			$js.="CKFinder.setupCKEditor(CKEDITOR.instances.{$id}, '$ckfinderUrl/' );";
		}

		$cs->registerScript('Yii.'.__CLASS__.'#'.$id,$js);
	}

	protected function getClientOptions()
	{
		//允许被定义的属性
		static $properties=array(
			'toolbar','toolbarSet','height','width','skin'
		);

		$options=$this->options;
		foreach($properties as $property) {
			if(isset($this->$property) && $this->$property!==null)
				$options[$property]=$this->$property;
		}

		$_options=array();
		foreach ($options as $key=>$value) {
			if ($key=='toolbarSet' && is_string($options['toolbar']) && is_array($value)) {
				$_options[]='toolbar_'.$this->toolbar.':'.CJavaScript::jsonEncode($value);
			} else {
				$_options[]=$key.':'.CJavaScript::encode($value);
			}
		}
		unset($_options['toolbarSet']);

		return "{".implode(',',$_options)."}";
	}
}
?>