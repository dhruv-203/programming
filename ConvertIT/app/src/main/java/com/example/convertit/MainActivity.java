package com.example.convertit;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.net.Uri;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class MainActivity extends AppCompatActivity {
    Button length=findViewById(R.id.length);
    Button area=findViewById(R.id.area);
    Button volume=findViewById(R.id.volume);
    Button weight=findViewById(R.id.weight);

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

    }
    public void callMainActivity2(View view){
        Intent openL = new Intent(getApplicationContext(),MainActivity2.class);
        startActivity(openL);
    }
}