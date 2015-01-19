<?php
/**
 * Procurando sempre programar em inglês;
 * Looking always program in English
 */

date_default_timezone_set('America/Sao_Paulo');
ini_set('display_errors', true);
error_reporting(E_ALL | E_STRICT);

require_once '../vendor/autoload.php';
use Fersoftware\Interfaces\ElementInterface;
use Fersoftware\Interfaces\FormInterface;
use Fersoftware\Form\Element;
use Fersoftware\Form\Form;
use Fersoftware\Tools\Functions;

$addForm = new Form();
$addForm->OptionForm('Mala Direta','#','post');
$arrForm[] = Functions::newElement('name','Nome:','name','Insira o Nome','input','text');
$arrForm[] = Functions::newElement('name','Email:','email','Insira o Email','input','text');

include_once('../src/Fersoftware/Pages/header.php');

$method = $_SERVER['REQUEST_METHOD'];
if($method == 'POST')
{
?>
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <h4>ENVIADO COM SUCESSO</h4>
        <p><strong>Nome: </strong><?php echo $_POST['name']?></p>
        <p><strong>Email: </strong><?php echo $_POST['email']?></p>
    </div>
<?php
}
//RENDERIZACAO DO FORMULARIO
//RENDER THE FORM
$addForm->render($arrForm);

include_once('../src/Fersoftware/Pages/footer.php');
?>
