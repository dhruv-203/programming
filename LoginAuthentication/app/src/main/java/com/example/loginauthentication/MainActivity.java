package com.example.loginauthentication;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.os.Parcelable;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

public class MainActivity extends AppCompatActivity {
    Button login;
    EditText username;
    EditText pass;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        login = findViewById(R.id.login);
        username = findViewById(R.id.username); 
        pass = findViewById(R.id.pass);

        login.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                if(username.getText().toString().equals("Dhruv0275") && pass.getText().toString().equals("d h r u v")){
                    Intent change = new Intent(MainActivity.this,MainActivity2.class);
                    change.putExtra("user", username.getText().toString());
                    change.putExtra("pass", pass.getText().toString());
                    startActivity(change);
                }
            }
        });
    }
}