package com.example.paineldepontuacao

import android.os.Bundle
import android.util.Log
import android.widget.Space
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.activity.enableEdgeToEdge
import androidx.compose.foundation.clickable
import androidx.compose.foundation.layout.Arrangement
import androidx.compose.foundation.layout.Box
import androidx.compose.foundation.layout.Column
import androidx.compose.foundation.layout.Spacer
import androidx.compose.foundation.layout.fillMaxHeight
import androidx.compose.foundation.layout.fillMaxSize
import androidx.compose.foundation.layout.fillMaxWidth
import androidx.compose.foundation.layout.height
import androidx.compose.foundation.layout.padding
import androidx.compose.foundation.layout.size
import androidx.compose.foundation.shape.CircleShape
import androidx.compose.material3.Card
import androidx.compose.material3.CardColors
import androidx.compose.material3.MaterialTheme
import androidx.compose.material3.Scaffold
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
import androidx.compose.ui.tooling.preview.Preview
import androidx.compose.ui.unit.dp
import com.example.paineldepontuacao.ui.theme.PaineldePontuacaoTheme

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        enableEdgeToEdge()
        setContent {
            PaineldePontuacaoTheme {
                MyApp()
            }
        }
    }
}

@Preview(showBackground = true)
@Composable
fun MyApp() {
    var pontosA by remember { mutableStateOf(0) }
    var pontosB by remember { mutableStateOf(0) }
    Surface(color = MaterialTheme.colorScheme.secondary) {
        PaineldePontuacaoTheme {
            Column (
                modifier = Modifier.fillMaxHeight().fillMaxWidth(),
                verticalArrangement = Arrangement.Center,
                horizontalAlignment = Alignment.CenterHorizontally
            ) {
                Text("Time A")
                Text("Pontuação: $pontosA")
                Card(
                    modifier = Modifier
                        .padding(20.dp)
                        .size(100.dp),
                    shape = CircleShape,
                    colors = CardColors(
                        containerColor = MaterialTheme.colorScheme.primary,
                        contentColor = Color(0xF0F0F0F0),
                        disabledContentColor = Color(0x00000000),
                        disabledContainerColor = Color(0x01010101)
                    )
                ) {
                    CreateButao(pontosA) { pontosA += 1 }
                }
                Spacer(modifier = Modifier.height(100.dp))
                Text("Time B")
                Text("Pontuação: $pontosB")
                Card(
                    modifier = Modifier
                        .padding(20.dp)
                        .size(100.dp),
                    shape = CircleShape,
                    colors = CardColors(
                        containerColor = MaterialTheme.colorScheme.tertiary,
                        contentColor = Color(0xF0F0F0F0),
                        disabledContentColor = Color(0x00000000),
                        disabledContainerColor = Color(0x01010101)
                    )
                ) {
                    CreateButao(pontosB) { pontosB += 1 }
                }
            }
        }

    }
}

@Composable
fun CreateButao(pontos: Int, onTap: () -> Unit){
    Card(
        modifier = Modifier
            .padding(3.dp)
            .size(150.dp)
            .clickable {
                onTap()
                Log.d("Contador", "CreateCircle: $pontos")
            },
        shape = CircleShape
    ) {
        Box (modifier = Modifier.fillMaxSize(), contentAlignment = Alignment.Center) {
               Text(text = "add")
        }
    }
}
