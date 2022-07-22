package com.example.loginauthentication;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.widget.TextView;

public class MainActivity2 extends AppCompatActivity {
TextView textView;
TextView textView2;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main2);

        textView = findViewById(R.id.textView);
        textView2 = findViewById(R.id.textView2);

        String names = getIntent().getStringExtra("user");
        String pass = getIntent().getStringExtra("pass");
        textView.setText(names);
        textView2.setText(pass);
    }
}