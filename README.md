# SOLID POC

## Sem o S (Antes da implementação do SOLID):
### Criei uma classe Compra que cuida tanto da lógica de compra quanto da lógica de exibição de detalhes da compra

## Com o S (Após a implementação do SOLID):
### dividi as responsabilidades criando uma classe separada para exibição. A classe Compra agora se concentra apenas na lógica de compra

### --------------------------------------

## Sem o O (Antes da implementação do SOLID):
### Vamos assumir que temos uma classe CalculadoraDesconto que calcula descontos com base em regras específicas
### Agora, imagine que você deseja adicionar um novo tipo de desconto. Para isso, você precisaria modificar a classe existente, violando o Princípio Aberto/Fechado.

## Com o O (Após a implementação do SOLID):
### Vamos criar uma interface Desconto e classes que a implementam para que possamos adicionar novos tipos de desconto sem modificar a classe CalculadoraDesconto

### --------------------------------------

## Sem o L (Antes da implementação do SOLID):
### Vamos criar uma classe CarrinhoCompra que espera que todos os itens do carrinho tenham um método calcularDesconto

## Com o L (Após a implementação do SOLID):
### Vamos garantir que as classes derivadas possam ser substituídas sem afetar o comportamento esperado. Para isso, criaremos uma interface CalculavelDesconto e ajustaremos as classes

### --------------------------------------

## Sem o I (Antes da implementação do SOLID):
### Vamos considerar uma interface única Pagamento que tem métodos para processar pagamentos, incluindo métodos que podem não ser relevantes para todas as classes que precisam processar pagamentos

## Com o I (Após a implementação do SOLID):
### Vamos criar interfaces mais específicas para evitar que as classes implementem métodos desnecessários. Criaremos interfaces ProcessamentoPagamento e OperacoesPagamento

### --------------------------------------

## Sem o D (Antes da implementação do SOLID):
### Vamos considerar uma classe Cliente que depende diretamente de uma implementação concreta de uma classe de envio de e-mails

