package com.example.navigation

import androidx.compose.foundation.layout.Arrangement
import androidx.compose.foundation.layout.Column
import androidx.compose.foundation.layout.PaddingValues
import androidx.compose.foundation.layout.Row
import androidx.compose.foundation.layout.Spacer
import androidx.compose.foundation.layout.fillMaxSize
import androidx.compose.foundation.layout.fillMaxWidth
import androidx.compose.foundation.layout.height
import androidx.compose.foundation.layout.padding
import androidx.compose.foundation.layout.width
import androidx.compose.material3.Button
import androidx.compose.material3.ButtonColors
import androidx.compose.material3.HorizontalDivider
import androidx.compose.material3.OutlinedTextField
import androidx.compose.material3.Surface
import androidx.compose.material3.Text
import androidx.compose.runtime.Composable
import androidx.compose.runtime.getValue
import androidx.compose.runtime.mutableStateOf
import androidx.compose.runtime.remember
import androidx.compose.runtime.setValue
import androidx.compose.ui.Alignment
import androidx.compose.ui.Modifier
import androidx.compose.ui.graphics.Color
import androidx.compose.ui.text.font.FontWeight
import androidx.compose.ui.text.style.TextDecoration
import androidx.compose.ui.unit.dp
import androidx.compose.ui.unit.sp
import androidx.navigation.NavController
import org.w3c.dom.Text

@Composable
fun LoginScreen(navController: NavController){
        //aula:

//        Column(modifier = Modifier.fillMaxSize(),
//            horizontalAlignment = Alignment.CenterHorizontally
//        ) {
////            Text(text = "Tela de Login")
////            Button(onClick = {navController.navigate(route = "home")}) {
////                Text(text = "Acessar a home")
////            }
//    }

//    atividade:
    var email by remember { mutableStateOf("") }
    var senha by remember { mutableStateOf("") }
//    var login by remember { mutableStateOf("") }

    Surface(modifier = Modifier.fillMaxSize().padding(10.dp)) {
        Column(
            verticalArrangement = Arrangement.Center,
            horizontalAlignment = Alignment.CenterHorizontally
        ) {
            Text(text = "Tela de Login", fontSize = 30.sp, fontWeight = FontWeight.Bold)
            OutlinedTextField(
                value = email, onValueChange = { novoEmail -> email = novoEmail.trim() },
                label = { Text(text = "Nome:", fontSize = 20.sp) },
                maxLines = 1
            )
            OutlinedTextField(
                value = senha,
                onValueChange = { novaSenha -> senha = novaSenha.trim() },
                label = { Text(text = "Senha:", fontSize = 20.sp) },
                maxLines = 1
            )
            Spacer(modifier = Modifier.height(10.dp))
            Row(modifier = Modifier.fillMaxWidth(), horizontalArrangement = Arrangement.Center) {
                Button(onClick = {navController.navigate(route = "signup")},
                            colors = ButtonColors(containerColor = Color.White,
                                                            contentColor = Color.Blue,
                                                            disabledContentColor = Color.White ,
                                                            disabledContainerColor = Color.Black
                            ),
                            contentPadding = PaddingValues()
                    ) {
                        Text(text = "Não é cadastrado?", textDecoration = TextDecoration.Underline)
                }
                Spacer(modifier = Modifier.width(80.dp))
                Button(onClick = { navController.navigate(route = "home") }) {
                    Text(text = "Login")
                }
            }
        }
    }
}