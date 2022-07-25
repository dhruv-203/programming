package com.example.gettables;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

import com.google.android.material.button.MaterialButton;

public class MainActivity extends AppCompatActivity {
    EditText entry;
    MaterialButton submit;
    TextView outputbox;
    String num;
    String[] result = new String[10];
    String[] calcu(String num){
        int a;
        String[] res = new String[10];
        try{
            a = Integer.parseInt(num);
        }
        catch (NumberFormatException s){
            return res;
        }
        for (int i = 1; i <= 10; i++) {
            res[i-1]= a+" X "+i+" = "+(a*i)+"\n";
        }
        return res;
    }
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        entry = findViewById(R.id.inputfield);
        submit = findViewById(R.id.submit);
        outputbox = findViewById(R.id.outputbox);
        submit.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                num= entry.getText().toString();
                result= calcu(num);
                for(String x:result){
                    outputbox.append(x);
                }
            }
        });
    }
}