# language: pt
Funcionalidade: Escrever no Celular
	Para digitar uma mensagem em um aparelho que não possui um teclado QWERTY embutido é necessário 
	fazer algumas combinações das 10 teclas numéricas do aparelho para conseguir digitar. Cada 
	número é associado a um conjunto de letras como a seguir:

    Letras  | Número 
    ABC     |   2
    DEF     |   3
    GHI     |   4
    JKL     |   5
    MNO     |   6
    PQRS    |   7
    TUV     |   8
    WXYZ    |   9
    Espaço  |   0


    Cenario: Digitar "2_22_222" deve representar o texto "ABC"
    	Dado que o usuário possui um celular sem teclado QWERTY
        E inseriu os dígitos "2_22_222"
        Então devemos obter o texto
            """
            ABC
            """

    Cenario: Obter o texto "SEMPRE ACESSO O DOJOPUZZLES" através da interpretação dos dígitos
        Dado que o usuário possui um celular sem teclado QWERTY
        E inseriu os dígitos "77773367_7773302_222337777_777766606660366656667889999_9999555337777"
        Então devemos obter o texto
            """
            SEMPRE ACESSO O DOJOPUZZLES
            """