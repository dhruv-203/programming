package com.example.layouts;

import androidx.annotation.Nullable;
import androidx.appcompat.app.ActionBar;
import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class MainActivity extends AppCompatActivity {
    Button linear ;
    Button constraint;
    Button scroll;
    Button table;



    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        linear = findViewById(R.id.linear);
        constraint = findViewById(R.id.constraint);
        scroll = findViewById(R.id.scroll);
        table= findViewById(R.id.table);
        getSupportActionBar().hide();
        constraint.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent Constraint = new Intent(MainActivity.this,MainActivity2.class);
                startActivity(Constraint);
            }
        });


    }
}