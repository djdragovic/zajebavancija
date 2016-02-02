<?php
public  Tablet $id = null
?>
<?php
$this->title = "Elektro prodavnica";
?>


<?php
use yii\helpers\Html;
use yii\widget\ActuveForm;
$this->title = "ELEKTRO PRODAVNICA";
?>

<?php
$Tablet = array("Serial number", "Price", "Weight", "Color", "Type");
?>

$model = new \app\models\ContactForm;
$model["Tablet"] = "Asus";
echo $model[name];

