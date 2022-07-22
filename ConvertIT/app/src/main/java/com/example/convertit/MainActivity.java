package com.example.convertit;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class MainActivity extends AppCompatActivity {
    Button length , area , volume , weight;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        length = findViewById(R.id.length);
        area = findViewById(R.id.area);
        volume = findViewById(R.id.volume);
        weight = findViewById(R.id.weight);
        length.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent Length = new Intent(MainActivity.this,MainActivity2.class);
                startActivity(Length);
            }
        });

    }
}