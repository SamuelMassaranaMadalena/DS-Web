package com.example.cartoesdeproduto

import android.os.Bundle
import android.provider.CalendarContract.Colors
import android.util.Log
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.activity.enableEdgeToEdge
import androidx.compose.foundation.clickable
import androidx.compose.foundation.layout.Arrangement
import androidx.compose.foundation.layout.Box
import androidx.compose.foundation.layout.Column
import androidx.compose.foundation.layout.fillMaxHeight
import androidx.compose.foundation.layout.fillMaxSize
import androidx.compose.foundation.layout.fillMaxWidth
import androidx.compose.foundation.layout.height
import androidx.compose.foundation.layout.padding
import androidx.compose.foundation.layout.size
import androidx.compose.foundation.layout.width
import androidx.compose.foundation.shape.CircleShape
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
import androidx.compose.ui.tooling.preview.Preview
import androidx.compose.ui.unit.dp
import androidx.compose.ui.unit.sp
import com.example.cartoesdeproduto.ui.theme.CartoesdeProdutoTheme

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        enableEdgeToEdge()
        setContent {
            CartoesdeProdutoTheme {
                MyApp()
            }
        }
    }
}


@Preview(showBackground = true)
@Composable
fun MyApp() {
    CartoesdeProdutoTheme {
        Surface(
            modifier = Modifier.fillMaxHeight().fillMaxWidth(),
            color = MaterialTheme.colorScheme.inversePrimary
        ) {
            Column (
                verticalArrangement = Arrangement.Center,
                horizontalAlignment = Alignment.CenterHorizontally
            ){
                Text(text = "Fone Bluetooth", fontSize = 20.sp)
                Text(text = "R$149,90", fontSize = 20.sp)
                Card(modifier = Modifier
                    .padding(10.dp)
                    .size(150.dp ),
                    shape = CircleShape,
                    colors = CardColors(
                                containerColor = MaterialTheme.colorScheme.primary,
                                contentColor = Color(0xF0F0F0F0),
                                disabledContentColor = Color(0x00000000),
                                disabledContainerColor = Color(0x01010101)
                    ) ){
                        Box(modifier =
                                Modifier.fillMaxSize().padding(10.dp).clickable { Log.d("clicou" ,"clicado")},
                                contentAlignment = Alignment.Center,
                            ){
                            Column(horizontalAlignment = Alignment.CenterHorizontally) {
                                Text(text = "Comprar", fontSize = 20.sp)
                            }
                        }
                }
            }
        }
    }
}