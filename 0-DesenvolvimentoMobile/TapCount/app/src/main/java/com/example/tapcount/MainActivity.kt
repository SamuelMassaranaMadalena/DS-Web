package com.example.tapcount
import android.os.Bundle
import android.util.Log
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
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
import androidx.compose.foundation.shape.CutCornerShape
import androidx.compose.foundation.shape.RoundedCornerShape
import androidx.compose.material3.Card
import androidx.compose.material3.MaterialTheme
import androidx.compose.material3.Surface
import androidx.compose.material3.Text
import androidx.compose.runtime.Composable
import androidx.compose.runtime.getValue //*****************************************************
import androidx.compose.runtime.mutableStateOf
import androidx.compose.runtime.remember
import androidx.compose.runtime.setValue //************************************************
import androidx.compose.ui.Alignment
import androidx.compose.ui.Modifier
import androidx.compose.ui.graphics.Color
import androidx.compose.ui.graphics.RectangleShape
import androidx.compose.ui.text.TextStyle
import androidx.compose.ui.tooling.preview.Preview
import androidx.compose.ui.unit.dp
import androidx.compose.ui.unit.sp
import com.example.tapcount.ui.theme.TapCountTheme
//fontes
import androidx.compose.ui.text.font.FontFamily



class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            TapCountTheme {
                MyApp()
            }
        }
    }
}
@Preview(showBackground = true)
@Composable
fun DefaultPreview() {
    TapCountTheme {
        MyApp()
    }

}


@Composable
fun MyApp(){
    var moneyCounter by remember{ mutableStateOf(0)}
    Surface(
        modifier = Modifier.fillMaxHeight().fillMaxWidth(),
        //color = MaterialTheme.colorScheme.primary
        color = Color(0xFF546E7A)
    ){
        Column(
            verticalArrangement = Arrangement.Center,
            horizontalAlignment = Alignment.CenterHorizontally,
        ) {
            Text(text = "R$ $moneyCounter",
                style = TextStyle(
                    color = Color.White,
                    fontSize = 39.sp,
                    fontFamily = FontFamily.Cursive
                )
            )
            Spacer(modifier = Modifier.height(100.dp))
            CreateCircle(moneyCounter) {
                moneyCounter += 1
            }
        }
    }
}

@Composable
fun CreateCircle(moneyCounter: Int, onTap: () -> Unit){
    Card(
        modifier = Modifier
            .padding(3.dp) // Espaçamento externo
            .size(150.dp) // Altura e largura iguais
            .clickable {
                onTap()
                Log.d("Contador", "CreateCircle: $moneyCounter")
            },
        shape = CircleShape // Formato circular
//        exemplos de formas que podem ser feitas
//        shape = RoundedCornerShape(16.dp) //quadrado com bordas levemente redondads
//        shape = RoundedCornerShape(topStart = 16.dp, bottomEnd = 8.dp) quadrado com borda superior e esquerda e inferior direita arredondadas
//        shape = RectangleShape retangulo
//        shape = CutCornerShape(12.dp) quadrado com as quinas cortadas ao invés de arredondadas

    ) {
        Box(modifier = Modifier.fillMaxSize(), contentAlignment = Alignment.Center){
            Text(text = "tap")
        }
    }
}
