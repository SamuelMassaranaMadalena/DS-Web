package com.example.primeiroprojeto

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.foundation.layout.Column
import androidx.activity.enableEdgeToEdge
import androidx.compose.foundation.layout.fillMaxHeight
import androidx.compose.foundation.layout.fillMaxSize
import androidx.compose.foundation.layout.fillMaxWidth
import androidx.compose.foundation.layout.padding
import androidx.compose.material3.Scaffold
import androidx.compose.material3.MaterialTheme
import androidx.compose.material3.Surface
import androidx.compose.material3.Text
import androidx.compose.runtime.Composable
import androidx.compose.ui.Modifier
import androidx.compose.ui.tooling.preview.Preview
import androidx.compose.ui.unit.dp
import com.example.primeiroprojeto.ui.theme.PrimeiroProjetoTheme

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            PrimeiroProjetoTheme {
                Surface(
                    modifier = Modifier.fillMaxHeight().fillMaxWidth().padding(all = 50.dp),
                    //modifier = Modifier
                    //        .fillMaxHeight()
                    //        .fillMaxWidth(),
                    color = MaterialTheme.colorScheme.primary) {
                    Greeting(name = "Bruno")
                }
            }
        }
    }
}

@Composable
fun Greeting(name: String, modifier: Modifier = Modifier) {
    Text(
        text = "Hello $name!",
        modifier = modifier
    )
}

@Preview(showBackground = true)
@Composable
fun GreetingPreview() {
    PrimeiroProjetoTheme {
        Column(){
            Greeting("Android")
            ShowAge(34)
        }
    }
}

@Preview
@Composable
fun ShowAge(age: Int = 12) {
    Text(text = age.toString())
}



