# studing-php


### variáveis

as variáveis em PHP são declaradas a partir do '$', ex:
```php
$exemplo;
```
#### tipos de dados

```php
  //string
  $exemplo1 = "Bruno"; //palavras/caracteres/cadeia de caracteres;
  
  //int
  $exemplo2 = 10; //números inteiros;
  
  //float
  $exemplo3 = 2.4; //números decimais;
  
  //boolean
  $exemplo4 = true; //true of false - boolean types;
  
  //null
  $exemplo5 = null; //nulo
  
  //array
  $exemplo6 = array("Fusca", 24, 10.2, "Bruno"); //array
  
  //objeto
  class pessoa{
     public $nome;      //declarando variáveis do objeto;
     public $sobrenome; //declarando variáveis do objeto;
     public function __construct($nome,$sobrenome){   //construção do objeto;
        $this->nome=$nome;
        $this->sobrenome=$sobrenome;
     }
     public function mensagem(){    //função que enviará a mensagem
        return "O usuário é $this->nome $this->sobrenome!";
        }
     }

  $pessoa1=new pessoa("Bruno","Silva"); //irá criar um novo objeto na variavel '$pessoa1';

  echo $pessoa1->mensagem(); //O usuário é Bruno Silva;
```

### comandos

`echo` -> O comando echo é um retorno de saída.
```php
  $exemplo = "exemplo";
  $exemplo2 = "de echo!";
  echo $exemplo; //mostrará a palavra 'exemplo';
  
  echo "A palavra soletrada e-x-e-m-p-l-o escreita é $exemplo"; //'A palavra soletrada e-x-e-m-p-l-o escreita é exemplo';
  
  echo 'Aqui está um '.$exemplo.' '.$exemplo2.' concatenado usando aspas simples!'; //'Aqui está um exemplo de echo! concatenado usando aspas simples!';
```

`var_dump(variableName)` -> Imprime qual o tipo da variável.
```php
  $exemplo1 = "Oi";
  var_dump($exemplo1); //srintg(2)='Oi';
  
  $exemplo2 = array("Fusca", 24, 10.2, "Bruno");

  var_dump($exemplo2); //array (size=4) 0=> string 'Fusca' (length=5), 1=> int 24, 2=> float 10.2, 3=> string 'Bruno' (length=5;)
```

`strlen(string)` -> Conta quantos caracteres a string possui.
```php
  $palavra = "Bruno";
  
  echo strlen($palavra);       //5 através da variável declarada;
  echo strlen("Oi tudo bom?"); //12 através da string digitada como parâmetro;
```

`str_word_count(string)` -> Conta quantos palavras a string possui.
```php
  $frase = "Bruno está estudando php";
  
  echo str_word_count($frase);       //4 através da variável declarada;
  echo str_word_count("Olá mundo!);  //2 através da string digitada como parâmetro;
```

`strrev(string)` -> Reverte a string.
```php
  $palavra = "Bruno";
  
  echo strrev($palavra); //onurB;
```

`strpos(string, wordFinded)` -> Mostra o index da palavra na string.
```php
  $frase = "PHP é uma linguagem de programação";

  echo strpos($frase, "é");                                //4;
  echo strpos("PHP é uma linguagem de programação", "de"); //21;
```

`str_replace("old","sew",string)` -> Substitui um caractere na string.
```php
  $palavra = "Olá Mundo";

  echo str_replace("Mundo","Bruno",$palavra); //Olá Bruno;
  echo str_replace("-","/","01-01-2003");     //01/01/2003
```
