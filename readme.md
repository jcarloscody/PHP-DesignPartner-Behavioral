[Derivado do Curso de Design Pattern](https://cursos.alura.com.br/certificate/4d649a9d-d3fd-4bbf-bd65-de431e778898)

[Linkedin](https://www.linkedin.com/pulse/php-design-pattern-behavioral-josu%2525C3%2525A9-carlos%3FtrackingId=fO5FK5xORvmoKVN%252BQgUdow%253D%253D/?trackingId=fO5FK5xORvmoKVN%2BQgUdow%3D%3D)

Modelagem não é uma tarefa facil, porém é algo fascinante, porque te desafia a entender a complexidade dos problemas do mundo, logo após isto abstrair em um conjunto de conceitos gerais ou genéricos e precisos para que a partir deste momento possamos desenvolver uma solução. 

É neste tom que temos padrões que podem nos ajudar na implementação das soluções. Neste tópico/resumo apresento alguns temas abordado no curso. De forma geral temos um sistema hipotético que trata de aplicação de impostos, aplicação de descontos, fluxo de pedidos, o estado do orçamento e relatório de orçamento.

**Na aplicação de impostos de uma única alíquota:** usado o strategy, pois para cada condição específica de imposto criamos uma instância responsável para implementar limpando assim um amontoado de ifs ou cases.

**Na aplicação de impostos de duas alíquotas:** foi usado o template Method, pois a regra de negócio aplicada a estes impostos viabilizava tirar um molde e disto ser usual para quem interessasse.

**Na aplicação de descontos:** foi usado o chain responsability ou cadeia de responsabilidade. Isto porque cada unidade possui uma responsabilidade de visualizar se é passível ou não de ser aplicado.

**No estado do orçamento:** foi usado o state, uma vez que tem a função de ipts literis determinar o estado que se encontra o trânsito do orçamento.

**No fluxo de pedido:** foi usado o Command/Command Handler. Dado que uma solicitação de tarefa é realizada e esta deve ser executada.

**Em tarefas após realização de tasks:** foi usado o observer, pois havia ouvintes interessados que deveriam executar tarefas após a realização de um pedido por exemplo.

**Em relatório de orçamento:** foi usado o iterator. Dado que com ele podemos fazer uma instância ser objeto de interação possibilitando apenas o acesso a seus estados e protegendo de modificações.

A gangue dos 4: os 23 padrões de projeto.

Classificação:
- Criacional
- **Comportamental**
- Estrutural
<br/>
<br/>

**TIPOS**

- **Estrategy**
  - Problematica: a classe possui tendencia de crescer infinitamente com vários IFs ou CASEs.
  - Resolução: com o padrão estratégia podemos extrair o parâmetro em foco para uma nova classe a instância e ela cuidará da implementação. No exemplo em questão foi usado no caso de impostos com uma alíquota.

- **Chain of Responsability**
  - Problemática: vários cases e ifs e estas condições indicam uma cadeia de responsabilidade
  - Solução: usar uma cadeia de responsabilidade. Onde cada instância terá uma responsabilidade para implementar e executar a regra de negócio. Foi usado no caso de aplicação de desconto quando se equiparava a quantidade de itens e o valor de cada.

- **Template Method**
  - Problemática: muitos métodos repetidos, porém cada um com sua especificidade de regras
  - Solução: template significa padrão, modelo, representação em escala reduzida. Seguindo esta lógica conseguimos abstrair os métodos redundantes em um molde que será implementado por quem necessitar. Foi usado na exemplificação de impostos com duas alíquotas.

- **State**
  - Problemática: temos vários estados em um fluxo de um processo e isto pode desencadear vários condicionais.
  - Solução: a criação de um estado para cada situação em que aquele ponto do processo se encontra. Na exemplificação foi usado no estado em que o orçamento do cliente se encontra (aprovado, reprovado, finalizado...).

- **Command**
Quando trabalhamos com o padrão comando é comum adicionarmos o CommandHandler isto porque quando vamos trabalhar com o modelo antigo deixamos a classe engessada quando queremos usa-la para outras finalidades. Então este comando tem a finalidade de encapsular as solicitações que fazemos. Isto foi exemplificado no fluxo de pedidos.

- **Observer**
Com este padrão podemos criar ações, geradores de ações e ouvintes que após ser notificado sobre o acontecimento fará algum procedimento em seguida. Foi implemento no fluxo de ações após a realização de um pedido, onde o pedido é o sujeito e temos outras instâncias que serão os ouvintes como a instância responsável por enviar email.

- **Iterator**
Na exemplificação fiz uma instância possuir a característica de ser inteirada ou percorrida, impossibilitando o acesso modificativo de seu estado de lista, tendo apenas o acesso get de seus elementos por meio de um loop. Para implementar isto no PHP usamos a interface IteratorAggregate. Implementamos na lista de orçamento.
