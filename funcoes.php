<?php

/**
 * TimeZone
 * Retorna o fuso horario local
 * que definira a hora e a data
 */
function timeZone(){
    date_default_timezone_set("America/Recife");
}
/**
 * DataAtual
 * Retorna a data atualizada
 */
function dataAtual(){
    return date("d/m/Y"); 
}
/**
 * horaAtual
 * Retorna a hora atualizada
 */
function horaAtual(){
    return date("h:i:sa");
}

/**
 * @param $texto
 * É o texto que será manupulado
 * Retorna Texto maiúsculo
 */
function textoMaiusculo($texto){
    if($texto){
        return strtoupper($texto);
    }
}
/**
 * @param $texto
 * É o texto que será manupulado
 * @param  $tipo
 * É o Número que indica o tipo de 
 * manipulação da string
 * Tipos:
 * 1 - Quantidade de caracters de um texto
 * 2 - Quantidade de palavras de um texto
 * 3 - Busca Posição da palavra na string
 */
function contar($texto, $tipo){
    if($texto && $tipo === 1){
        return strlen($texto);
    }
    if($texto && $tipo === 2){
        return str_word_count($texto);
    }
    if($texto && $tipo === 3){
        return strpos($texto, "Diogo");
    }
    return false;
}

/**
 * ReduzirStr
 * Reduzir o tamanho de um texto
 * @param $str que representa o texto a ser reduzido
 * @param $quantidade que reprenta quantos caracters vão ser exibidos
 */
function reduzirStr($str,$quantidade){
    $tamanho = strlen($str);
    if($str && $tamanho >= $quantidade){
      return substr($str,0,$quantidade)." [...]";
    }else{
        return $str;
    }
  }

  /**
   * CriarLista
   * Popula as informações exibidas na tela principal
   */
  function criarLista(){
      $listaNoticia[0] = array(
          "titulo" => "BOXE",
          "descricao" => "O boxe é um esporte de combate que envolve o uso dos punhos para atacar e se defender. Tem origens antigas, remontando a civilizações como os sumérios e egípcios, mas sua forma moderna se desenvolveu no século XVIII na Inglaterra. O esporte se popularizou ao redor do mundo e é caracterizado pela sua combinação de técnica, força física, estratégia e condicionamento. Os competidores, chamados de pugilistas ou boxeadores, enfrentam-se em um ringue dividido em quadrados e delimitado por cordas. As lutas são divididas em rounds, com duração específica, e são supervisionadas por um árbitro. O objetivo é acertar o oponente com golpes limpos e válidos, enquanto se esquiva e se defende dos ataques recebidos. O boxe moderno é categorizado em diversas classes de peso, desde pesos mosca até pesos pesados, o que permite a participação de atletas de diferentes estaturas e pesos. Existem organizações internacionais que regulamentam o esporte e promovem campeonatos de prestígio, como a Associação Mundial de Boxe (WBA), o Conselho Mundial de Boxe (WBC) e a Federação Internacional de Boxe (IBF). Além da competição profissional, o boxe também é praticado como forma de exercício físico, defesa pessoal e disciplina mental. Muitos academias e clubes oferecem aulas para iniciantes, visando não apenas o condicionamento físico, mas também o desenvolvimento da autoconfiança e disciplina. Apesar de sua popularidade, o boxe também é um esporte controverso devido aos riscos associados às lesões cerebrais traumáticas decorrentes dos golpes na cabeça. Essa preocupação levou a diversas medidas de segurança e regulamentações para proteger a saúde dos atletas, como exames médicos rigorosos e regras específicas sobre golpes permitidos. Em resumo, o boxe é um esporte emocionante e desafiador que exige habilidade técnica, condicionamento físico e coragem dos seus praticantes. Ao longo dos anos, tem sido uma fonte de inspiração para muitos e continua a ser um dos esportes mais assistidos e praticados em todo o mundo.",
          "imagem" => "./imagens/boxe.jpg",
          "href" => ""
      );
      $listaNoticia[1] = array(
          "titulo" => "BOXE",
          "descricao" => "O boxe é um esporte de combate que envolve o uso dos punhos para atacar e se defender. Tem origens antigas, remontando a civilizações como os sumérios e egípcios, mas sua forma moderna se desenvolveu no século XVIII na Inglaterra. O esporte se popularizou ao redor do mundo e é caracterizado pela sua combinação de técnica, força física, estratégia e condicionamento. Os competidores, chamados de pugilistas ou boxeadores, enfrentam-se em um ringue dividido em quadrados e delimitado por cordas. As lutas são divididas em rounds, com duração específica, e são supervisionadas por um árbitro. O objetivo é acertar o oponente com golpes limpos e válidos, enquanto se esquiva e se defende dos ataques recebidos. O boxe moderno é categorizado em diversas classes de peso, desde pesos mosca até pesos pesados, o que permite a participação de atletas de diferentes estaturas e pesos. Existem organizações internacionais que regulamentam o esporte e promovem campeonatos de prestígio, como a Associação Mundial de Boxe (WBA), o Conselho Mundial de Boxe (WBC) e a Federação Internacional de Boxe (IBF). Além da competição profissional, o boxe também é praticado como forma de exercício físico, defesa pessoal e disciplina mental. Muitos academias e clubes oferecem aulas para iniciantes, visando não apenas o condicionamento físico, mas também o desenvolvimento da autoconfiança e disciplina. Apesar de sua popularidade, o boxe também é um esporte controverso devido aos riscos associados às lesões cerebrais traumáticas decorrentes dos golpes na cabeça. Essa preocupação levou a diversas medidas de segurança e regulamentações para proteger a saúde dos atletas, como exames médicos rigorosos e regras específicas sobre golpes permitidos. Em resumo, o boxe é um esporte emocionante e desafiador que exige habilidade técnica, condicionamento físico e coragem dos seus praticantes. Ao longo dos anos, tem sido uma fonte de inspiração para muitos e continua a ser um dos esportes mais assistidos e praticados em todo o mundo.",
          "imagem" => "./imagens/boxe.jpg",
          "href" => ""
      );
      $listaNoticia[2] = array(
          "titulo" => "BOXE",
          "descricao" => "O boxe é um esporte de combate que envolve o uso dos punhos para atacar e se defender. Tem origens antigas, remontando a civilizações como os sumérios e egípcios, mas sua forma moderna se desenvolveu no século XVIII na Inglaterra. O esporte se popularizou ao redor do mundo e é caracterizado pela sua combinação de técnica, força física, estratégia e condicionamento. Os competidores, chamados de pugilistas ou boxeadores, enfrentam-se em um ringue dividido em quadrados e delimitado por cordas. As lutas são divididas em rounds, com duração específica, e são supervisionadas por um árbitro. O objetivo é acertar o oponente com golpes limpos e válidos, enquanto se esquiva e se defende dos ataques recebidos. O boxe moderno é categorizado em diversas classes de peso, desde pesos mosca até pesos pesados, o que permite a participação de atletas de diferentes estaturas e pesos. Existem organizações internacionais que regulamentam o esporte e promovem campeonatos de prestígio, como a Associação Mundial de Boxe (WBA), o Conselho Mundial de Boxe (WBC) e a Federação Internacional de Boxe (IBF). Além da competição profissional, o boxe também é praticado como forma de exercício físico, defesa pessoal e disciplina mental. Muitos academias e clubes oferecem aulas para iniciantes, visando não apenas o condicionamento físico, mas também o desenvolvimento da autoconfiança e disciplina. Apesar de sua popularidade, o boxe também é um esporte controverso devido aos riscos associados às lesões cerebrais traumáticas decorrentes dos golpes na cabeça. Essa preocupação levou a diversas medidas de segurança e regulamentações para proteger a saúde dos atletas, como exames médicos rigorosos e regras específicas sobre golpes permitidos. Em resumo, o boxe é um esporte emocionante e desafiador que exige habilidade técnica, condicionamento físico e coragem dos seus praticantes. Ao longo dos anos, tem sido uma fonte de inspiração para muitos e continua a ser um dos esportes mais assistidos e praticados em todo o mundo.",
          "imagem" => "./imagens/boxe.jpg",
          "href" => ""
      );
      $listaNoticia[3] = array(
          "titulo" => "BOXE",
          "descricao" => "O boxe é um esporte de combate que envolve o uso dos punhos para atacar e se defender. Tem origens antigas, remontando a civilizações como os sumérios e egípcios, mas sua forma moderna se desenvolveu no século XVIII na Inglaterra. O esporte se popularizou ao redor do mundo e é caracterizado pela sua combinação de técnica, força física, estratégia e condicionamento. Os competidores, chamados de pugilistas ou boxeadores, enfrentam-se em um ringue dividido em quadrados e delimitado por cordas. As lutas são divididas em rounds, com duração específica, e são supervisionadas por um árbitro. O objetivo é acertar o oponente com golpes limpos e válidos, enquanto se esquiva e se defende dos ataques recebidos. O boxe moderno é categorizado em diversas classes de peso, desde pesos mosca até pesos pesados, o que permite a participação de atletas de diferentes estaturas e pesos. Existem organizações internacionais que regulamentam o esporte e promovem campeonatos de prestígio, como a Associação Mundial de Boxe (WBA), o Conselho Mundial de Boxe (WBC) e a Federação Internacional de Boxe (IBF). Além da competição profissional, o boxe também é praticado como forma de exercício físico, defesa pessoal e disciplina mental. Muitos academias e clubes oferecem aulas para iniciantes, visando não apenas o condicionamento físico, mas também o desenvolvimento da autoconfiança e disciplina. Apesar de sua popularidade, o boxe também é um esporte controverso devido aos riscos associados às lesões cerebrais traumáticas decorrentes dos golpes na cabeça. Essa preocupação levou a diversas medidas de segurança e regulamentações para proteger a saúde dos atletas, como exames médicos rigorosos e regras específicas sobre golpes permitidos. Em resumo, o boxe é um esporte emocionante e desafiador que exige habilidade técnica, condicionamento físico e coragem dos seus praticantes. Ao longo dos anos, tem sido uma fonte de inspiração para muitos e continua a ser um dos esportes mais assistidos e praticados em todo o mundo.",
          "imagem" => "./imagens/boxe.jpg",
          "href" => ""
      );
      $listaNoticia[4] = array(
          "titulo" => "BOXE",
          "descricao" => "O boxe é um esporte de combate que envolve o uso dos punhos para atacar e se defender. Tem origens antigas, remontando a civilizações como os sumérios e egípcios, mas sua forma moderna se desenvolveu no século XVIII na Inglaterra. O esporte se popularizou ao redor do mundo e é caracterizado pela sua combinação de técnica, força física, estratégia e condicionamento. Os competidores, chamados de pugilistas ou boxeadores, enfrentam-se em um ringue dividido em quadrados e delimitado por cordas. As lutas são divididas em rounds, com duração específica, e são supervisionadas por um árbitro. O objetivo é acertar o oponente com golpes limpos e válidos, enquanto se esquiva e se defende dos ataques recebidos. O boxe moderno é categorizado em diversas classes de peso, desde pesos mosca até pesos pesados, o que permite a participação de atletas de diferentes estaturas e pesos. Existem organizações internacionais que regulamentam o esporte e promovem campeonatos de prestígio, como a Associação Mundial de Boxe (WBA), o Conselho Mundial de Boxe (WBC) e a Federação Internacional de Boxe (IBF). Além da competição profissional, o boxe também é praticado como forma de exercício físico, defesa pessoal e disciplina mental. Muitos academias e clubes oferecem aulas para iniciantes, visando não apenas o condicionamento físico, mas também o desenvolvimento da autoconfiança e disciplina. Apesar de sua popularidade, o boxe também é um esporte controverso devido aos riscos associados às lesões cerebrais traumáticas decorrentes dos golpes na cabeça. Essa preocupação levou a diversas medidas de segurança e regulamentações para proteger a saúde dos atletas, como exames médicos rigorosos e regras específicas sobre golpes permitidos. Em resumo, o boxe é um esporte emocionante e desafiador que exige habilidade técnica, condicionamento físico e coragem dos seus praticantes. Ao longo dos anos, tem sido uma fonte de inspiração para muitos e continua a ser um dos esportes mais assistidos e praticados em todo o mundo.",
          "imagem" => "./imagens/boxe.jpg",
          "href" => ""
      );
      return $listaNoticia;
  }

  function calcularImc($peso, $altura){
    $resposta = 0;
    if($peso && $altura){
        $resposta = $peso / ($altura * $altura);  
    }
    return round($resposta,2);
  }

  function imcBuscarPorId($id)
  {
      $pdo = Database::conexao();
      $sql = "SELECT * FROM imc WHERE id = $id";
      $stmt = $pdo->prepare($sql);
      $list = $stmt->execute();
      $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $list;
  }

  function cadastrar($nome,$email,$peso,$altura,$imc,$classificacao)
    {
        if(!$nome || !$email || !$peso || !$altura || !$imc || !$classificacao){return;}
        $sql = "INSERT INTO `imc_tb` (`nome`,`email`,`peso`,`altura`,`imc`,`classificacao`)
        VALUES(:nome,:email,:peso,:altura,:imc,:classificacao)";

        $pdo = Database::conexao();
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':peso', $peso);
        $stmt->bindParam(':altura', $altura);
        $stmt->bindParam(':imc', $imc);
        $stmt->bindParam(':classificacao', $classificacao);
        $result = $stmt->execute();
        return ($result)?true:false;
    }

  

    function cadastrarContato($nome,$sobrenome,$email,$telefone,$mensagem)
    {
        // var_dump($nome,$sobrenome,$email,$telefone,$mensagem);die;
        if(!$nome ||!$sobrenome || !$email || !$telefone || !$mensagem){return;}
        $sql = "INSERT INTO `contato_tb` (`nome`,`sobrenome`,`email`,`telefone`,`mensagem`)
        VALUES(:nome,:sobrenome,:email,:telefone,:mensagem)";

        $pdo = Database::conexao();
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':sobrenome', $sobrenome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':mensagem', $mensagem);
        $result = $stmt->execute();
        return ($result)?true:false;
    }

    function classificarImc($imc){
        if($imc <= 16){
            return "magreza grave;";
        }elseif($imc > 16 && $imc <= 17){
            return "magreza moderada";
        }elseif($imc > 17 && $imc <= 18.5){
            return "magreza leve";
        }elseif($imc >= 18.6 && $imc<= 24.9){
            return "Peso Ideal";
        }elseif($imc >= 25 && $imc <= 29.9 ){
             return "Sobre Peso";
        }elseif($imc >= 30 && $imc <= 34.9){
            return "Obesidade grau 1";
        }elseif($imc >= 35 && $imc <= 39.9){
            return "Obesidade grau 2 ou severa";
        }elseif($imc >= 40){
            return "Obesidade grau 3 ou morbida";
        }
    }

    function criptografia($senha){
        if(!$senha)return false;
        return sha1($senha);
    }

    function listarNoticias()
    {
        $pdo = Database::conexao();
        $sql = "SELECT * FROM noticia_tb";
        $stmt = $pdo->prepare($sql);
        $list = $stmt->execute();
        $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $list;
    }

    function buscarNoticiaPorId($id)
    {
         if(!$id){return;}
         $sql = "SELECT * FROM noticia_tb WHERE `id` = :id";
         $pdo = Database::conexao();
         $stmt = $pdo->prepare($sql);
         $stmt->bindParam(':id', $id);
         $result = $stmt->execute();
         $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
         return $result[0];
    }

    function cadastrarNoticia($titulo,$img,$descricao)
    {
        if(!$titulo ||!$img || !$descricao){return;}
        $sql = "INSERT INTO `noticia_tb` (`titulo`,`img`,`descricao`)
        VALUES(:titulo,:img,:descricao)";

        $pdo = Database::conexao();
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':img', $img);
        $stmt->bindParam(':descricao', $descricao);
        $result = $stmt->execute();
        return ($result)?true:false;
    }
    function cadastrarDoacao($comprovante,$mensagem)
    {
        if(!$comprovante || !$mensagem){return;}
        $sql = "INSERT INTO `doacao_tb` (`comprovante`,`mensagem`)
        VALUES(:comprovante,:mensagem)";

        $pdo = Database::conexao();
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':comprovante', $comprovante);
        $stmt->bindParam(':mensagem', $mensagem);
        $result = $stmt->execute();
        return ($result)?true:false;
    }

    function listarCategorias(){
        $pdo = Database::conexao();
        $sql = "SELECT * FROM categoria_tb";
        $stmt = $pdo->prepare($sql);
        $list = $stmt->execute();
        $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $list;
    }

    function listarNoticiasPorCategoria($idCategoria){
        $pdo = Database::conexao();
        $sql = "SELECT * FROM noticia_tb WHERE `categoria_id` = $idCategoria LIMIT 3;";
        $stmt = $pdo->prepare($sql);
        $list = $stmt->execute();
        $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $list;
    }

    function cadastrarCategoria($nomeCategoria)
    {
        if(!$nomeCategoria){return;}
        $sql = "INSERT INTO `categoria_tb` (`nome`)
        VALUES(:nome)";

        $pdo = Database::conexao();
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome', $nomeCategoria);
        $result = $stmt->execute();
        return ($result)?true:false;
    }

    function verificarCategoriaDuplicada($termo)
  {
      $pdo = Database::conexao();
      $sql = "SELECT * FROM `categoria_tb` WHERE `nome` = '$termo'";
      $stmt = $pdo->prepare($sql);
      $list = $stmt->execute();
      $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return ($list)?true:false;
  }

  function gerarNumerosRandomicos(){
    return date('Y').date('m').date('d').date("h").date(':i').'-'.date('sa').rand();
  }

  function upload($imagem,$caminho){
    if(!isset($_FILES["fileToUpload"])){return;}

    // $target_dir = "assets/uploads/";
    $target_dir = $caminho;
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
   
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])){
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 900000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
            return $_FILES["fileToUpload"]["name"];
        } else {
            // echo "Sorry, there was an error uploading your file.";
            return false;
        }
    }
  }


  

    