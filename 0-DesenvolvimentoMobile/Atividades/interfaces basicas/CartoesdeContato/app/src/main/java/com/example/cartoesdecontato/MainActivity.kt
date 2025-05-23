package com.example.cartoesdecontato

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.activity.enableEdgeToEdge
import androidx.compose.foundation.layout.Arrangement
import androidx.compose.foundation.layout.Box
import androidx.compose.foundation.layout.Column
import androidx.compose.foundation.layout.Spacer
import androidx.compose.foundation.layout.fillMaxHeight
import androidx.compose.foundation.layout.fillMaxSize
import androidx.compose.foundation.layout.fillMaxWidth
import androidx.compose.foundation.layout.height
import androidx.compose.foundation.layout.padding
import androidx.compose.foundation.shape.RoundedCornerShape
import androidx.compose.material3.Card
import androidx.compose.material3.CardColors
import androidx.compose.material3.MaterialTheme
import androidx.compose.material3.Scaffold
import androidx.compose.material3.Surface
import androidx.compose.material3.Text
import androidx.compose.runtime.Composable
import androidx.compose.ui.Alignment
import androidx.compose.ui.Modifier
import androidx.compose.ui.graphics.Color
import androidx.compose.ui.text.font.Font
import androidx.compose.ui.text.font.FontWeight
import androidx.compose.ui.tooling.preview.Preview
import androidx.compose.ui.unit.TextUnit
import androidx.compose.ui.unit.dp
import androidx.compose.ui.unit.sp
import com.example.cartoesdecontato.ui.theme.CartoesdeContatoTheme

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
//        enableEdgeToEdge()
        setContent {
            CartoesdeContatoTheme {
                MyApp()
            }
        }
    }
}

@Preview(showBackground = true)
@Composable
fun MyApp(){
    Surface (
        modifier = Modifier.fillMaxHeight().fillMaxWidth(),
        color = MaterialTheme.colorScheme.inversePrimary
    ){
        Column(
            verticalArrangement = Arrangement.Center,
            horizontalAlignment = Alignment.CenterHorizontally
        ) {
            CreateCard(0)
            Spacer(modifier = Modifier.height(200.dp))
            CreateCard(1)
        }
    }
}

@Composable
fun CreateCard(a: Int = 0){
    val nome = listOf("João Silva", "Maria Souza")
    val tel = listOf("(11) 99999-9999", "(21) 98888-8888")
    val mail = listOf("joao@email.com", "maria@email.com")
    Card (
            modifier = Modifier
                .fillMaxWidth()
                .padding(30.dp)
                .height(200.dp),
            colors = CardColors(
                containerColor = MaterialTheme.colorScheme.primary,
                contentColor = Color(0xF0F0F0F0),
                disabledContentColor = Color(0x00000000),
                disabledContainerColor = Color(0x01010101)
            ) ,
            shape = RoundedCornerShape(20.dp)
    ){
            Box(modifier =
                Modifier.fillMaxSize().padding(10.dp),
                contentAlignment = Alignment.CenterStart,
            ){
                Column {
                    Text(text = "Nome: ${nome[a]}", fontSize = 18.sp)
                    Text(text = "Telefone:  ${tel[a]}", fontSize = 18.sp)
                    Text(text = "E-mail: ${mail[a]}", fontSize = 18.sp)
                }
            }
    }

}

