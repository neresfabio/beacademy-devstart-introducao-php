![banner be.academy](https://camo.githubusercontent.com/7cf2efb7d1537cf65744e9cc8526ac8e07087bdc14383705cca41e5a8a144933/68747470733a2f2f6369352e676f6f676c6575736572636f6e74656e742e636f6d2f70726f78792f42623933394a356641445a696d337975754d4e59354a7973434839314d7362525531796a344771574536715041794237584770325779707435765565456876585f774e76647832707a7463776f36744f5430566e7767704c2d6957374649444d78493979416e42334f53427a4d43714a75574142775256533d73302d642d65312d66742368747470733a2f2f72693635312e66696c65732e6b6561702e6170702f72693635312f32306661373230662d626630362d346431352d626463632d303538643665393766343832)
# Treinamento PHP

> Resumo do aprendizado sobre PHP na be.academy.

1. Fazer uma calculadora.

    ![calculadora](/images/img01.png)

2. Operadores Lógicos.

> == Igualdade<br>
> === Identicidade<br>
> '>' Maior que<br>
> '<' Menor que<br>
> '>=' Maior igual a que<br>
> '<=' Menor igual a que<br>
> ! Negação<br>
> !== Negar a Identicidade<br>

3. Ternário

```php
<?php
$idade = 17;

$idade >= 18 ? "de maior" : "de menor";

$nome = "Mel";

isset($nome) ? $nome : 'nome não definido';

// ou

$nome ?? 'nome não definido';

```

- Crie uma tabela no HTML que receba dados do PHP

    ![Tabela](/images/img02.png).

4. Etrutura ```if, if_else, if(){if(){}}```


```php
<?php

$numero = 0;

if($numero > 0){
    echo "Positivo";
}else{
    if($numero < 0){
        echo "Negativo";
    }else{
        echo "Null";
    }
}
```

- Crie uma estrutura mais fácil para mesma logica acima.

5. SWITCH

Mais Verboso
```php
<?php
$mes = 4;
switch($mes){
    case 1:
        echo "Mês de Janeiro";
        break;
    case 2:
        echo "Mês de Fevereiro";
        break;
    case 3:
        echo "Mês de Março";
        break;
    case 4:
        echo "Mês de Abril";
        break;
    case 5:
        echo "Mês de Maio";
        break;
    case 6:
        echo "Mês de Junho";
        break;
    case 7:
        echo "Mês de Julho";
        break;
    case 8:
        echo "Mês de Agosto";
        break;
    case 9:
        echo "Mês de Setembro";
        break;
    case 10:
        echo "Mês de Outubro";
        break;
    case 11:
        echo "Mês de Novembro";
        break;
    case 12:
        echo "Mês de Dezembro";
        break;
    default:
        echo "Escolha uma opção";
}

```
- Faça usando ```match```

5. Enquanto

- While

6. Funções

- <code>declare(strict_types=1);</code>

**Usar** as tipagens economiza tempo de execução, pois ao iniciar o processo logo no inicio ele para a execução se os valores esperados não forem do mesmo tipo esperado.

```php
function welcome(string $nome):string
{
    return "Bem vindo {$nome}";
}
```
O bloco acima é um exemplo de função onde os parâmentros possuem seus tipos e o retorno da função tem um tipo declarado.

7. String - Funções de strings

- **strtoupper()** - Converte uma string para MAIÚSCULAS 
<code>strtoupper(string $string): string</code>

-  **strtolower()** - Converte uma string para minúsculas
<code>strtolower(string $str): string</code>

- **ucfirst()** - Converte para maiúscula o primeiro caractere de uma string
<code>ucfirst(string $str): string</code>

- **ucwords()** - Converte para maiúsculas o primeiro caractere de cada palavra
<code>ucwords(string $str): string</code>

- **mb_strtoupper()** - Faça uma string maiúscula
<code>mb_strtoupper(string $string, ?string $encoding = null): string</code>

8. Criptografia

**Não recomendado**
- base64
- md5
**Recomendado**
- argon2
<code>echo password_hash($senha, PASSWORD_ARGON2I)</code>

9. Manipulando Diretórios

```php
<?php
mkdir('teste');
mkdir('teste/fotos');
mkdir('teste/fotos/2022');
mkdir('teste/fotos/2022/ferias');

//para executar no terminal

tree nome_do_arquivo; exibe a estrutura de pastas
```

## Referências

- Tabela HTML:

[https://developer.mozilla.org/pt-BR/docs/Web/HTML/Element/table](https://developer.mozilla.org/pt-BR/docs/Web/HTML/Element/table).

[https://pt.stackoverflow.com/questions/21073/criar-tabela-html-e-mostrar-dados-usando-php](https://pt.stackoverflow.com/questions/21073/criar-tabela-html-e-mostrar-dados-usando-php).

[https://www.w3schools.com/php/php_forms.asp](https://www.w3schools.com/php/php_forms.asp).

[Declare](https://www.php.net/manual/pt_BR/control-structures.declare.php)
[Tipos de Declaração](https://www.php.net/manual/pt_BR/language.types.declarations.php#language.types.declarations.strict)

[fopen](https://www.php.net/manual/pt_BR/function.fopen.php)

[Excluir](https://www.php.net/manual/pt_BR/function.unset.php)
