package com.example.lib

class MyClass {
}
/*
fun main(){
    println("Hello Kotlin!")


    //exemplos de print
    println("I am learning Kotlin.")//printa em nova linha
    print("It is awesome!")//printa na linha
    print("\nW\nO\nW\n")//barrainversaN quebraLinha

    //variavéis
    var name1 = "Bruno" //Valor mutavel
    val name2 = "Bruno" // Valor não mutavel -> Imutavek
    println("Nome: $name1")

    var name: String
    name = "Bruno"
    println(name)

    var age: Int
    age = 22
    println(age)

    val pi: Double = 3.14
    println(pi)


    var quantidade = 900
    if (quantidade == 1000){
        print("Você possuí $quantidade")
    }else if(quantidade >= 1000){
        print("Você possuí muito dinheiro")
    }else{
        print("Trabalhe mais")
    }

    when(quantidade) {
        in 1..100 -> print("Essa quantidade esta entre 1 e 100")
        !in 1..100 -> print("Essa quantidade não esta entre 1 e 100")
        100 -> print("Você tem 100")
        200 -> print("Você tem 200")
        300 -> print("Você tem 300")
        400 -> print("Você tem 400")
        else -> {
            println("$quantidade não é um numero valido")
        }
    }

    for (i in 1..10) {
        if (i%3 == 0) println("$i é multiplo de 3")
    }

    var i = 1
    while (i <= 5) {
        println("i = $i")
        i++
    }

    i = 1
    do {
        println("i = $i")
        i++
    } while (i <= 5)


    print("Hello World")
    multiplosDeDois()

    calcular(10, 100)

    println(calcularIdadeGato("Oresthes", 2025, 2020))

    var listaDeNomes = listOf("Bruno", "Antonio", "Felipe", "Jonatas")//listOf cria um array imutavel
    println(listaDeNomes)
    println(listaDeNomes[0])
    println(listaDeNomes.get(0))

    var nomes = mutableListOf("Ana", "Bruno")
    nomes.add("Beatriz")
    nomes.remove("Ana")
    println(nomes)

    for (item in listaDeNomes) {
        println("Nome: $item")
    }

    listaDeNomes.forEach {
        println(it+" com it")
    }
    listaDeNomes.forEach{ nome ->
        println(nome+" sem it")
    }

    val frutas = listOf("Maçã", "Banana", "Laranja")
    frutas.forEachIndexed { index, fruta ->
        println("Fruta na posição $index: $fruta")
    }

    var nomes2 = mutableListOf("Ana", "Bruno")
    println("Número de elementos na lista é ${nomes2.size}")//tamanho de uma array

    val alunos = mapOf(//map imutavel
        "João" to 8.5,
        "Maria" to 9.0,
        "Pedro" to 7.5
    )
    println(alunos)
    println(alunos["Maria"])
    println(alunos.values)

    var estoque = mutableMapOf(
        "Maçã" to 10,
        "Banana" to 20
    )
    estoque["Laranja"] = 15
    estoque["Banana"] = 18
    estoque.remove("Maçã")
    println(estoque)

    estoque.forEach{ frutas,quantidade ->
        println("$frutas: $quantidade Unidades")
    }

    print("Digite seu nome: ")
    val nome = readLine()
    println("Olá, $nome!")
}

fun multiplosDeDois() {
    for (i in 1..10) {
        if (i%2 == 0) {
            println("$i is multiples of 2")
        }
    }
}

fun calcular(primeiro:Int = 10, segundo:Int = 100) {//aqui os argumentos tem valores padrão que se não mencionados tem o valor padrão, mas se mencionar sobrepõe
    println("A multiplicação resultou em: " + primeiro * segundo)
}

fun add(a:Int, b:Int):Int{// último :Int se referencia a funçao com um inteiro, ou seja retorna um valor inteiro, precisando de um return
    return a + b
}

fun calcularIdadeGato(nome:String, anoAtual:Int, anoNascimento:Int): String {
    return "O gato $nome possuí " + (anoAtual-anoNascimento) + " Anos"
}

*/
fun main() {
    var alunos = mutableListOf<String>("Rafael","Nicolly","Gustavinho","Bruno","Matheus Martin","Gustavao")
    var opcao: Int?
    var saida:Boolean = false
    while (saida == false) {//poderia ser um do while!!
        println("\n===== MENU =====")
        println("1 - Cadastrar aluno")
        println("2 - Listar alunos")
        println("3 - Buscar aluno")
        println("4 - Remover aluno")
        println("0 - Sair")
        print("Escolha uma opção: ")
        val input = readLine()
        opcao = input?.toIntOrNull()
        when (opcao) {
            1 -> {
                println("Cadastrar Alunos")
                var nome = readLine()
                if (!nome.isNullOrBlank()) {
                    alunos.add(nome)
                } else {
                    print("Nome invalido")
                }
            }

            2 -> {
                println("Listar Alunos")
                if (alunos.isNotEmpty()) {
                    alunos.forEach { aluno ->
                        println(aluno)
                    }
                } else {
                    println("Não há alunos cadastrados")
                }
            }

            3 -> {
                println("Buscar Alunos")
                var busca: String? = readLine()
                if (alunos.contains(busca)){
                    println("Aluno(a) $busca encontrado(a)!")
                }else{
                    println("Aluno(a) não encontrado(a)")
                }
            }

            4 -> {
                println("Remover Alunos")
                var remocao: String? = readLine()
                alunos.remove(remocao);
            }

            0 -> {
                saida = true
            }

            else -> {
                println("Escolha inválida, por Favor \nescolha uma das alternativas!")
            }
        }
    }
    println("Fim da execução")
}

