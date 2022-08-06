package com.example.alertdialogbox;

import static android.app.AlertDialog.*;

import androidx.appcompat.app.AppCompatActivity;

import android.app.AlertDialog;
import android.content.DialogInterface;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.widget.Button;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {

    Button button,OK ;
    AlertDialog box;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        button = findViewById(R.id.button);
        AlertDialog.Builder builder= new AlertDialog.Builder(MainActivity.this);
        builder.setTitle("Alert");
        View inflater = (View) getLayoutInflater().inflate(R.layout.alertbox, null);
        OK = inflater.findViewById(R.id.button2);
        builder.setView(inflater);
        box = builder.create();
        button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                box.show();
                OK.setOnClickListener(new View.OnClickListener() {
                    @Override
                    public void onClick(View view) {
                        box.dismiss();
                    }
                });
            }
        });
    }
}