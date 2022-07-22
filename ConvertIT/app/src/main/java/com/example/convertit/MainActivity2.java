package com.example.convertit;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

public class MainActivity2 extends AppCompatActivity {
    EditText text;
    TextView show;
    Button button, km, cm, dm;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        text = findViewById(R.id.field);
        show = findViewById(R.id.output);
        button = findViewById(R.id.submit);
        km = findViewById(R.id.km);
        cm = findViewById(R.id.cm);
        dm = findViewById(R.id.dm);
//    button.setOnClickListener(new View.OnClickListener() {
//        @Override
//        public void onClick(View view) {
//            Toast.makeText(MainActivity.this, text.getText(), Toast.LENGTH_LONG).show();
//        }
//    });
       km.setOnClickListener(new View.OnClickListener() {
           @Override
           public void onClick(View view) {
               int tmp ;
               tmp= Integer.parseInt(text.getText().toString());
               tmp/=1000;
               show.setText("The Value in Kilometers: "+tmp);
           }
       });
        cm.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                int tmp ;
                tmp= Integer.parseInt(text.getText().toString());
                tmp*=100;
                show.setText("The Value in Centimeters: "+tmp);
            }
        });
        dm.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                int tmp ;
                tmp= Integer.parseInt(text.getText().toString());
                tmp*=10;
                show.setText("The Value in Decimeters: "+tmp);
            }
        });
    }
    }

