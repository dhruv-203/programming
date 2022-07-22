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
    Button button,km,cm,dm;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main2);
        text= findViewById(R.id.field);
        show = findViewById(R.id.output);
        button=findViewById(R.id.submit);
        km = findViewById(R.id.km);
        cm=findViewById(R.id.cm);
        dm=findViewById(R.id.dm);
//    button.setOnClickListener(new View.OnClickListener() {
//        @Override
//        public void onClick(View view) {
//            Toast.makeText(MainActivity.this, text.getText(), Toast.LENGTH_LONG).show();
//        }
//    });
        final String[] choice = new String[1];
        km.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                choice[0] ="km";
            }
        });
        dm.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                choice[0] ="dm";
            }
        });
        cm.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View view){
                choice[0]="cm";
            }
        });

        button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                String num = text.getText().toString();
                int a = Integer.parseInt(num);
                if(choice[0]=="cm"){
                    show.setText("The Value in Centimeters: "+(a*100)+" cm");
                }
                if(choice[0]=="km"){
                    show.setText("The Value in Kilometers: "+(a/1000.0)+" km");
                }
                if(choice[0]=="dm"){
                    show.setText("The Value in Decimeters: "+(a*10)+" dm");
                }
            }
        });
    }
}