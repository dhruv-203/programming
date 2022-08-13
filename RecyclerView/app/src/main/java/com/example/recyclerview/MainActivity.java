package com.example.recyclerview;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class MainActivity extends AppCompatActivity {
Button grid, linear, staggered;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        grid = findViewById(R.id.grid);
        linear = findViewById(R.id.linear);
        staggered = findViewById(R.id.staggered);
        Intent intent = new Intent(this,RecyclerView.class);
        grid.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                intent.putExtra("choice","grid");
                startActivity(intent);
            }
        });
        linear.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                intent.putExtra("choice","linear");
                startActivity(intent);
            }
        });
        staggered.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                intent.putExtra("choice","staggered");
                startActivity(intent);
            }
        });

    }
}