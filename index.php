<?php
include_once("configuracao.php");
include_once("configuracao/conexao.php");
include_once("funcoes.php");
include_once("model/acesso_model.php");

$nome = ($_SERVER["REQUEST_METHOD"] == "POST"
&& !empty($_POST['nome'])) ? $_POST['nome'] : null;

$sobrenome = ($_SERVER["REQUEST_METHOD"] == "POST"
&& !empty($_POST['sobrenome'])) ? $_POST['sobrenome'] : null;

$email = ($_SERVER["REQUEST_METHOD"] == "POST"
&& !empty($_POST['email'])) ? $_POST['email'] : null;

$peso = ($_SERVER["REQUEST_METHOD"] == "POST"
&& !empty($_POST['peso'])) ? $_POST['peso'] : null;

$altura = ($_SERVER["REQUEST_METHOD"] == "POST"
 && !empty($_POST['altura'])) ? $_POST['altura'] : null;

$telefone = ($_SERVER["REQUEST_METHOD"] == "POST"
&& !empty($_POST['telefone'])) ? $_POST['telefone'] : null;

$mensagem = ($_SERVER["REQUEST_METHOD"] == "POST"
&& !empty($_POST['mensagem'])) ? $_POST['mensagem'] : null;

$login = ($_SERVER["REQUEST_METHOD"] == "POST"
&& !empty($_POST['login'])) ? $_POST['login'] : null;

@$senha = ($_SERVER["REQUEST_METHOD"] == "POST"
&& !empty(criptografia($_POST['senha']))) ? criptografia($_POST['senha']) : null;

$titulo = ($_SERVER["REQUEST_METHOD"] == "POST"
&& !empty($_POST['titulo'])) ? $_POST['titulo'] : null;

$descricao = ($_SERVER["REQUEST_METHOD"] == "POST"
&& !empty($_POST['descricao'])) ? $_POST['descricao'] : null;

$imagem = ($_SERVER["REQUEST_METHOD"] == "POST"
&& !empty($_POST['fileToUpload'])) ? $_POST['fileToUpload'] : null;

$nomeCategoria = ($_SERVER["REQUEST_METHOD"] == "POST"
&& !empty($_POST['nomeCategoria'])) ? $_POST['nomeCategoria'] : null;

 $resposta = 0;
 $resposta = calcularImc($peso, $altura);
 $classificacao = classificarImc($resposta);
 $noticia = null;
 $categorias = [];
 $noticiasPorCategoria = [];

 timeZone();
  $data = dataAtual();
  $tituloDoSite = "BEM VINDO A INFOSPORTS!";
  $subTituloDoSite = "Aqui é onde você encontra todos os itens mais novos e modernos do seu esporte
  preferido. <br>".$data;

if($_GET && isset($_GET['pagina'])){
  $paginaUrl = $_GET['pagina'];
}else{
  $paginaUrl = null;
}

if($paginaUrl === "principal"){
  cadastrar($nome,$email,$peso,$altura,$resposta,$classificacao);
}elseif($paginaUrl === "contato"){
  cadastrarContato($nome,$sobrenome,$email,$telefone,$mensagem);
}elseif($paginaUrl === "cadastrar-noticia"){
  $caminho = "assets/uploads/";
  $nomedaImagem = upload($imagem,$caminho);
  cadastrarNoticia($titulo,$nomedaImagem,$descricao);
}elseif($paginaUrl === "doacao"){
  $caminho = "comprovante/";
  $nomedaImagem = upload($imagem,$caminho);
  cadastrarDoacao($nomedaImagem,$mensagem);
  // var_dump($nomedaImagem,$mensagem);
}elseif($paginaUrl === "cadastrar-categoria"){
  if(!verificarCategoriaDuplicada($nomeCategoria)){
    cadastrarCategoria($nomeCategoria);
  }
}elseif($paginaUrl === "login"){
  
  $usuarioCadastrado = acesso::verificarLogin($login);
  if(
    $usuarioCadastrado &&
    acesso::validaSenha($senha, $usuarioCadastrado['senha'])
  ){
      acesso::registrarAcessoValido($usuarioCadastrado);
  }
}elseif($paginaUrl === "sair"){
  acesso::limparSessao();
}elseif($paginaUrl === "detalhe"){
  if($_GET && isset($_GET['id'])){
    $idNoticia = $_GET['id'];
  }else{
    $idNoticia = 0;
  }
  $noticia = buscarNoticiaPorId($idNoticia);
  $noticiasPorCategoria = listarNoticiasPorCategoria($noticia['categoria_id']);
}

include_once("view/header.php");
  if($paginaUrl === "principal"){
    include_once("view/principal.php");
  }elseif($paginaUrl === "contato"){
    acesso::protegerTela();
    include_once("view/contato.php");
  }elseif($paginaUrl === "login"){
    include_once("view/login.php");
  }elseif($paginaUrl === "registro"){
    include_once("model/registro_model.php");
    include_once("controller/registro_controller.php");
  }elseif($paginaUrl === "cadastrar-noticia"){
    acesso::protegerTela();
    $categorias = listarCategorias();
    include_once("view/noticia.php");
  }elseif($paginaUrl === "cadastrar-categoria"){
    acesso::protegerTela();
    include_once("view/categoria.php");
  }elseif($paginaUrl === "doacao"){
    acesso::protegerTela();
    include_once("view/doacao.php");
  }elseif($paginaUrl === "detalhe"){
    include_once("view/detalhe.php");
  }else{
    echo "404 Página não existe!";
  }

include_once("view/footer.php");
?>
