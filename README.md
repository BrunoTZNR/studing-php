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

`str_word_count(string)` -> Conta quantas palavras a string possui.
```php
  $frase = "Bruno está estudando php";
  
  echo str_word_count($frase);       //4 através da variável declarada;
  echo str_word_count("Olá mundo!);  //2 através da string digitada como parâmetro;
```

`strrev(string)` -> Inverte a string.
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

`$variableName = (typeNum)$variable;` -> Conversão int - float.
```php
  $valor = 10.00;                               //float
  $valorConvertido = (int)$valor;               //int
  $valorConvertido2 = (float)$valorConvertido;  //float
```

`is_int(variableName);` -> True or False na condição da variável ser do tipo int.
```php
  $valor1 = 100;
  $valor2 = 5.75;
  $valor3 = "teste";

  var_dump(is_int($valor1)); //boolean(true)
  var_dump(is_int($valor2)); //boolean(false)
  var_dump(is_int($valor3)); //boolean(false)
```

`is_float(variableName);` -> True or False na condição da variável ser do tipo float.
```php
  $valor1 = 100;
  $valor2 = 5.75;
  $valor3 = "teste";

  var_dump(is_float($valor1)); //boolean(false)
  var_dump(is_float($valor2)); //boolean(true)
  var_dump(is_float($valor3)); //boolean(false)
```

`is_numeric(variableName);` -> True or False na condição que haja algum número na variável sendo int/float/string.
```php
  $valor1 = 100;
  $valor2 = 5.75;
  $valor3 = "1teste"
  $valor4 = "123";

  var_dump(is_numeric($valor1)); //boolean(true
  var_dump(is_numeric($valor2)); //boolean(true)
  var_dump(is_numeric($valor3)); //boolean(false)
  var_dump(is_numeric($valor4)); //boolean(true)
```

`pi();` -> Mostra o valor de pi.
```php
  echo pi(); //3.1415926535898;
```

`min();` -> Acha o menor valor.
```php
  $numeros = [1,10,40,5000,-20,15];
  
  echo min($numeros); //-20;
```

`max();` -> Acha o maior valor.
```php
  $numeros = [1,10,40,5000,-20,15];
  
  echo max($numeros); //5000;
```

`abs();` -> Acha o valor absoluto.
```php
  $numero = -20;
  
  echo abs($numero); //20;
```

`sqrt();` -> Calcula a raiz quadrada.
```php
  $numero = 16;
  
  echo sqrt($numero); //4;
```

`round();` -> Arredonda números, >=.5 arredonda pra cima, <.5 arredonda pra baixo.
```php
  $numero1 = 10.65;
  $numero2 = 10.45;
    
  echo round($numero1); //11;
  echo round($numero2); //10;
```

`rand(initialValue, finalValue);` -> Gera um núemro aleatório.
```php
  echo rand();      //aleatório infinito;
  echo rand(1,10);  //um número entre 1 e 10;
```

#### constantes

`define("constanteName",value);` -> Cria uma constante.
```php
  define("exemplo",100);
  
  echo exemplo; //100;
```

#### Operadores
##### Aritméticos

`+(variable)` -> Identidade - conversão da variável para int ou float conforme o  apropriado.
```php
  $valor1 = "10";
  var_dump(+$valor1); //int 10;
  $valor2 = "10.5";
  var_dump(+$valor2); //float 10.5;
```

`-(variable)` -> Negação - oposto da variável.
```php
  $valor3 = "15";
  echo -$valor3; //-15;
  
  $valor4 = -15;
  echo -$valor4; //15;
```

`(+)` -> Adição.
```php
  $n1 = 10;
  $n2 = 5;
        
  echo $n1 + $n2; //15;
```

`(+)` -> Subtração.
```php
  $n1 = 10;
  $n2 = 5;
        
  echo $n1 - $n2; //5;
```

`(+)` -> Multiplicação.
```php
  $n1 = 10;
  $n2 = 5;
        
  echo $n1 * $n2; //50;
```

`(+)` -> Divisão.
```php
  $n1 = 10;
  $n2 = 5;
        
  echo $n1 / $n2; //2;
```

`(+)` -> Módulo.
```php
  $n1 = 10;
  $n2 = 5;
        
  echo $n1 % $n2; //0;
```

`(+)` -> Exponencial.
```php
  $n1 = 10;
  $n2 = 5;
        
  echo $n1 ** $n2; //100000;
```

##### Atribuição

`(=)` -> Operador básico de atribuição.
```php
  $exemplo = "exemplo";
```

```php
  $n3 = 1;   //1;
  $n3 += 1;  //2;
  $n3 -= 1;  //1;
  $n3 *= 1;  //1;
  $n3 /= 1;  //1;
  $n3 **=1;  //1;
```

##### Incrementação/Decrementação
```php
  $n4 = 1;   //1;
  $n5 = 1;   //1;
```

`++vabriable` -> Pré-Incrementação.
```php
  echo ++$n4; //2;
```

`++vabriable` -> Pós-Incrementação.
```php
  echo $n4++; //2;
  echo $n4;   //3;
```

`++vabriable` -> Pré-Decrementação.
```php
  echo --$n5; //0;
```

`++vabriable` -> Pós-Decrementação.
```php
  echo $n5--; //0;
  echo $n5;   //-1;
```

##### Concatenação

`.` -> Concatenação de string.
```php
  $nome = "Bruno";
  $sobrenome = "Silva";
  $nomecompleto = $nome.' '.$sobrenome;
```

##### Comparação

`(==)` -> Igual.
```php
  var_dump(5 == 5);       //true;
  var_dump(5 == 10);      //false;
  var_dump(5 == "5");     //true;
```

`(===)` -> Idêntico.
```php
  var_dump(5 === 5);      //true;
  var_dump(5 === 10);     //false;
  var_dump(5 === "5");    //false;
```

`(!=)` -> Diferente.
```php
  var_dump(5 != 5);       //false;
  var_dump(5 != 10);      //true;
```

`(!==)` -> Não Idêntico.
```php
  var_dump(5 != 5);       //false;
  var_dump(5 != 10);      //true;
  var_dump(5 != "5");     //false;
```

`(<)` -> Menor que.
```php
  var_dump(5 != 5);       //false;
  var_dump(5 != 10);      //true;
```

`(>)` -> Maior que.
```php
  var_dump(5 != 5);       //false;
  var_dump(5 != 10);      //true;
```

`(<=)` -> Menor ou Igual.
```php
  var_dump(5 != 5);       //false;
  var_dump(5 != 10);      //true;
```

`(>=)` -> Maior ou Igual.
```php
  var_dump(5 != 5);       //false;
  var_dump(5 != 10);      //true;
```

##### Condicional

`(condição) ? /true/ : /false/;` -> Ternário.
```php
  $idade = 15;
        
  echo $idade >= 18 ? "Maior de idade" : "Menor de idade"; //Menor de idade;
```

##### Lógico

`(&&)` -> E.
```php
  var_dump(true && true);     //true;
  var_dump(true && false);    //false;
  var_dump(false && true);    //false;
  var_dump(false && false);   //false;
```

`(||)` -> OU.
```php
  var_dump(true || true);     //true;
  var_dump(true || false);    //true;
  var_dump(false || true);    //true;
  var_dump(false || false);   //false;
```

`(!)` -> Não.
```php
  var_dump(!true);   //false;
  var_dump(!false);  //true;
```

#### Estrutura de condição

##### If/Else

`if(condição)` -> Se.
```php
  $hora = 12;
  if(hora >= 12){
    echo "Boa Tarde";
  } //Boa Tarde;
```

`if(condição)/else` -> Se/Se Não.
```php
  $hora = 8;
  if(hora >= 12){
    echo "Boa Tarde";
  } else {
    echo "Bom Dia";
  } //Bom Dia;
```

`if(condição)/else if(condição)/else` -> Se/Se Não/Se não.
```php
  $hora = 19;
  if(hora < 12){
    echo "Bom Dia";
  } else if(hora >= 12 && hora < 18){
    echo "Boa Tarde";
  } else {
    echo "Boa Noite";
  } //Boa Noite;
```

##### Switch

`switch(variable)` -> Escolha.
```php
  $cor = "vermelho";
  
  switch($cor){
    case "vermelho":
      echo "A cor é vermelha";
    break;
    case "azul":
      echo "A cor é azul";
    break;
    case "rosa":
      echo "A cor é rosa";
    break;
    default:
      echo "A cor ".$cor." não é conhecida";
  } //A cor é vermelha;
```

#### Estrutura de repetição

##### While

`while(condição)` -> Enquanto.
```php
  $x = 1;
  
  while($x<=5){
    echo "$x";
  } // 1, 2, 3, 4, 5;
```

##### Do...while

`Do{...}while(condição)` -> Faça enquanto.
```php
  $y = 6;
  
  do{
    echo "$y";
    $y--;
  }while($y>=0) //6, 5, 4, 3, 2, 1, 0;
```

##### for

`for(variavel;condição;incremento/)` -> Para.
```php
  for($i=0;$i<=9;$i++){
    echo "$i";
  } //0, 1, 2, 3, 4, 5, 6, 7, 8, 9;
```

##### Foreach

`foreach(variavel as alias)` -> Pecorra.
```php
  $cores = ["azul","amarelo","verde","vermelho"];

  foreach($cores as $valor){
    echo "A cor é $valor <br>";
  } //A cor é azul, A cor é amarelo, A cor é verde, A cor é vermelho;
```

#### Funções

