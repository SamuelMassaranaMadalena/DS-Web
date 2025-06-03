package com.example.navigation

import androidx.compose.foundation.layout.Arrangement
import androidx.compose.foundation.layout.Column
import androidx.compose.foundation.layout.Row
import androidx.compose.foundation.layout.Spacer
import androidx.compose.foundation.layout.fillMaxSize
import androidx.compose.foundation.layout.fillMaxWidth
import androidx.compose.foundation.layout.height
import androidx.compose.foundation.layout.padding
import androidx.compose.foundation.layout.size
import androidx.compose.foundation.layout.width
import androidx.compose.foundation.shape.RoundedCornerShape
import androidx.compose.material.icons.Icons
import androidx.compose.material.icons.filled.Check
import androidx.compose.material.icons.filled.Close
import androidx.compose.material.icons.filled.Delete
import androidx.compose.material3.Button
import androidx.compose.material3.ButtonColors
import androidx.compose.material3.Card
import androidx.compose.material3.CardColors
import androidx.compose.material3.HorizontalDivider
import androidx.compose.material3.Icon
import androidx.compose.material3.OutlinedTextField
import androidx.compose.material3.Text
import androidx.compose.material3.TextField
import androidx.compose.runtime.Composable
import androidx.compose.runtime.getValue
import androidx.compose.runtime.mutableStateOf
import androidx.compose.runtime.remember
import androidx.compose.runtime.setValue
import androidx.compose.ui.Alignment
import androidx.compose.ui.Modifier
import androidx.compose.ui.graphics.Color
import androidx.compose.ui.graphics.Shape
import androidx.compose.ui.text.font.FontFamily
import androidx.compose.ui.text.style.TextAlign
import androidx.compose.ui.unit.dp
import androidx.compose.ui.unit.sp
import androidx.navigation.NavController

@Composable
fun HomeScreen(navController: NavController) {
    var textoDosCard by remember { mutableStateOf("") }
    Column(
        modifier = Modifier.fillMaxSize(),
        horizontalAlignment = Alignment.CenterHorizontally
    ) {
        Card(
            modifier = Modifier.fillMaxWidth().height(100.dp),
            colors = CardColors(
                containerColor = Color.Blue,
                contentColor = Color.White,
                disabledContainerColor = Color.Black,
                disabledContentColor = Color.Gray
            ),
            shape = RoundedCornerShape(0),
        ) {
            Column(modifier = Modifier.fillMaxSize(), verticalArrangement = Arrangement.Center) {
                Text(
                    text = "Tarefas",
                    fontSize = 30.sp,
                    modifier = Modifier.padding(20.dp),
                    fontFamily = FontFamily.Serif
                )
            }
        }
        OutlinedTextField(
            modifier = Modifier.fillMaxWidth().padding(horizontal = 30.dp),
            value = textoDosCard,
            onValueChange = { novoTexto -> textoDosCard = novoTexto.trim() },
            label = { Text(text = "Digite a sua tarefa") },
            maxLines = 2
        )
        Row(modifier = Modifier.padding(10.dp)) {
            Button(
                onClick = {}, shape = RoundedCornerShape(10.dp),
                colors = ButtonColors(
                    containerColor = Color.Blue,
                    contentColor = Color.White,
                    disabledContentColor = Color.Blue,
                    disabledContainerColor = Color.White
                )
            ) {
                Text(text = "Adicionar Tarefa")
            }
            Spacer(modifier = Modifier.padding(horizontal = 45.dp))
            Button(
                onClick = {}, shape = RoundedCornerShape(10.dp),
                colors = ButtonColors(
                    containerColor = Color.Red,
                    contentColor = Color.White,
                    disabledContentColor = Color.Red,
                    disabledContainerColor = Color.White
                ),
            ) {
                Text(text = "Apagar")
            }
        }
        Row(horizontalArrangement = Arrangement.Center) {
            Card(modifier = Modifier.width(200.dp),
                shape = RoundedCornerShape(0.dp),
            ) {
                Column(modifier = Modifier.fillMaxWidth(), horizontalAlignment = Alignment.CenterHorizontally) {
                    Text(text = "Tarefas e Fazeres", fontSize = 18.sp)
                    HorizontalDivider(modifier = Modifier.fillMaxWidth(),
                                                color = Color.Blue
                    )
                }
            }
            Spacer(modifier = Modifier.padding(horizontal = 2.dp))
            Card(modifier = Modifier.width(200.dp),
                shape = RoundedCornerShape(0.dp)
            ) {
                Column(modifier = Modifier.fillMaxWidth(),horizontalAlignment = Alignment.CenterHorizontally) {
                    Text(text = "Tarefas Concluidas", fontSize = 18.sp)
                }
            }
        }
        Card(modifier = Modifier.padding(top = 20.dp)) {
            Row(modifier = Modifier.fillMaxWidth()) {
                Text(text = "0 - Estudar Kotlin + Compose", fontSize = 15.sp, modifier = Modifier.padding(10.dp))
                Row(modifier = Modifier.fillMaxWidth(), horizontalArrangement = Arrangement.End) {
                    Icon(Icons.Default.Delete, contentDescription = "deletar", tint = Color.Red, modifier = Modifier.size(30.dp).padding(1.dp))
                    Icon(Icons.Default.Check, contentDescription = "Concluir", tint = Color.Green, modifier = Modifier.size(30.dp).padding(1.dp))
                }
            }
        }
        Card(modifier = Modifier.padding(top = 10.dp)) {
            Row(modifier = Modifier.fillMaxWidth()) {
                Text(text = "1 - Tarefa Sesi", fontSize = 15.sp, modifier = Modifier.padding(10.dp))
                Row(modifier = Modifier.fillMaxWidth(), horizontalArrangement = Arrangement.End) {
                    Icon(Icons.Default.Delete, contentDescription = "deletar", tint = Color.Red, modifier = Modifier.size(30.dp).padding(1.dp))
                    Icon(Icons.Default.Check, contentDescription = "Concluir", tint = Color.Green, modifier = Modifier.size(30.dp).padding(1.dp))
                }
            }
        }
        Card(modifier = Modifier.padding(top = 10.dp)) {
            Row(modifier = Modifier.fillMaxWidth()) {
                Text(text = "2 - Entregar atestado Senai", fontSize = 15.sp, modifier = Modifier.padding(10.dp))
                Row(modifier = Modifier.fillMaxWidth(), horizontalArrangement = Arrangement.End) {
                    Icon(Icons.Default.Delete, contentDescription = "deletar", tint = Color.Red, modifier = Modifier.size(30.dp).padding(1.dp))
                    Icon(Icons.Default.Check, contentDescription = "Concluir", tint = Color.Green, modifier = Modifier.size(30.dp).padding(1.dp))
                }
            }
        }
        Card(modifier = Modifier.padding(top = 10.dp)) {
            Row(modifier = Modifier.fillMaxWidth()) {
                Text(text = "3 - Levantamento de Requisitos TCC Senai", fontSize = 15.sp, modifier = Modifier.padding(10.dp))
                Row(modifier = Modifier.fillMaxWidth(), horizontalArrangement = Arrangement.End) {
                    Icon(Icons.Default.Delete, contentDescription = "deletar", tint = Color.Red, modifier = Modifier.size(30.dp).padding(1.dp))
                    Icon(Icons.Default.Check, contentDescription = "Concluir", tint = Color.Green, modifier = Modifier.size(30.dp).padding(1.dp))
                }
            }
        }
    }
}


//        Button(onClick =  {navController.navigate(route = "login")}) {
//            Icon(Icons.Default.Close, contentDescription = "bora bill", modifier = Modifier.size(30.dp))
//        }
