package com.example.convertit;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

public class MainActivity2 extends AppCompatActivity {
    EditText text ;
    TextView show;
    Button km,cm,dm;
    String num;
    int a;
    int parser(String str){
        int a;
        try {
            a = Integer.parseInt(str);
        }
        catch (NumberFormatException s){
            return 0;
        }

        return a;
    }
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main2);
        text= findViewById(R.id.field);
        show = findViewById(R.id.output);
        km = findViewById(R.id.km);
        cm=findViewById(R.id.cm);
        dm=findViewById(R.id.dm);
//    button.setOnClickListener(new View.OnClickListener() {
//        @Override
//        public void onClick(View view) {
//            Toast.makeText(MainActivity.this, text.getText(), Toast.LENGTH_LONG).show();
//        }
//    });

        km.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                num = text.getText().toString();
                a=parser(num);
                show.setText("The Value in Kilometers: "+(a/1000.0)+" km");
            }
        });
        dm.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                num = text.getText().toString();
                a=parser(num);
                show.setText("The Value in Decimeters: "+(a*10)+" dm");
            }
        });
        cm.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View view){
                num = text.getText().toString();
                a= parser(num);
                show.setText("The Value in Centimeters: "+(a*100)+" cm");
            }
        });

    }
}