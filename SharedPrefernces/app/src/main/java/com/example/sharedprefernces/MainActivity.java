package com.example.sharedprefernces;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {
Button set;
EditText display;
TextView displayhere;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        set = findViewById(R.id.set);
        display = findViewById(R.id.display);
        displayhere = findViewById(R.id.displayhere);
        set.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
            displayhere.setText(display.getText().toString());
            }
        });
    }
}