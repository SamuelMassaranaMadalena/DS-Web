package com.example.navigation

import androidx.compose.foundation.gestures.snapping.SnapPosition
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
import androidx.compose.ui.text.style.TextAlign
import androidx.compose.ui.text.style.TextDecoration
import androidx.compose.ui.unit.dp
import androidx.compose.ui.unit.sp
import androidx.navigation.NavController

@Composable
fun SignUpScreen(navController: NavController) {
    Column(modifier = Modifier.fillMaxSize(),
                horizontalAlignment = Alignment.CenterHorizontally
        ) {
        var nome by remember { mutableStateOf("") }
        var senha by remember { mutableStateOf("") }
        var email by remember { mutableStateOf("") }

        Surface(modifier = Modifier.fillMaxSize().padding(10.dp)) {
            Column(
                verticalArrangement = Arrangement.Center,
                horizontalAlignment = Alignment.CenterHorizontally
            ) {
                Text(text = "Tela de Cadastro", fontSize = 30.sp, fontWeight = FontWeight.Bold)
                OutlinedTextField(
                    value = nome, onValueChange = { novoNome -> nome = novoNome.trim() },
                    label = { Text(text = "Nome:", fontSize = 20.sp) },
                    maxLines = 1
                )
                OutlinedTextField(
                    value = email, onValueChange = { novoEmail -> email = novoEmail.trim() },
                    label = { Text(text = "E-mail:", fontSize = 20.sp) },
                    maxLines = 1
                )
                OutlinedTextField(
                    value = senha, onValueChange = { novaSenha -> senha = novaSenha.trim() },
                    label = { Text(text = "Senha:", fontSize = 20.sp) },
                    maxLines = 1
                )
                Spacer(modifier = Modifier.height(10.dp))
                Row(modifier = Modifier.fillMaxWidth(), horizontalArrangement = Arrangement.Center) {
                    Button(onClick = {navController.navigate(route = "login")},
                        colors = ButtonColors(containerColor = Color.White,
                            contentColor = Color.Blue,
                            disabledContentColor = Color.White ,
                            disabledContainerColor = Color.Black
                        ),
                        contentPadding = PaddingValues()
                    ) {
                        Text(text = "Já tem uma conta?\nEntrar:", textAlign = TextAlign.Center, textDecoration = TextDecoration.Underline)
                    }
                    Spacer(modifier = Modifier.width(50.dp))
                    Button(onClick = { navController.navigate(route = "home") }) {
                        Text(text = "Cadastrar")
                    }
                }
            }
        }
    }
}