<?php	/* @var $this yii\web\View */
use yii\helpers\Html;

$this->title = 'это this->title';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?>; ?= Html::encode($this->title)</h1>
	<h3>далее обычный код HTML5 в F:\wamp64\www\yii\views\site\hello.php</h3>
    <p>
        Привет Yii2 basic, привет <?= $yiiName ?>!
    </p>
    <code><?= __FILE__ ?> -- HTML5? вставка с текстом кода</code>
</div>

