package com.example.practical3;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Spinner;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {
    Spinner select;
    EditText usname,pass,email,phone,country,state,date,time;
    Button submit;
    String dropvalue;
    Intent intent;
    String[] container;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
       String[] intrests= new String[]{"Select Your Interests","Traveling","Reading","Gaming","Singing","Binge Watching"};
       select= (Spinner) findViewById(R.id.dropdown);
        ArrayAdapter<String> adpater = new ArrayAdapter<String>(this, androidx.appcompat.R.layout.support_simple_spinner_dropdown_item,intrests);
        select.setAdapter(adpater);
        usname=findViewById(R.id.Username);
        pass=findViewById(R.id.password);
        email=findViewById(R.id.email);
        phone = findViewById(R.id.phone);
        country=findViewById(R.id.country);
        state=findViewById(R.id.state);
        date=findViewById(R.id.date);
        time=findViewById(R.id.time);
        select.setOnItemSelectedListener(new AdapterView.OnItemSelectedListener() {
            @Override
            public void onItemSelected(AdapterView<?> adapterView, View view, int i, long l) {
                dropvalue=select.getSelectedItem().toString();
            }

            @Override
            public void onNothingSelected(AdapterView<?> adapterView) {
                Toast.makeText(MainActivity.this, "Select Any One", Toast.LENGTH_SHORT).show();
            }
        });
        submit= findViewById(R.id.Submit);
        submit.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                if(pass.getText().toString().equals("D H R U V")){

                    container = new String[]{usname.getText().toString(),email.getText().toString(),phone.getText().toString(),country.getText().toString(),state.getText().toString(),date.getText().toString(),time.getText().toString()};
                    intent= new Intent(MainActivity.this,LoginSuccessPage.class);
                    intent.putExtra("values",container);
                    Toast.makeText(MainActivity.this, "Information Submitted", Toast.LENGTH_LONG).show();
                    startActivity(intent);
                }
                else if(pass.getText().toString().equals("")){
                    Toast.makeText(MainActivity.this, "Please Enter Your Password", Toast.LENGTH_SHORT).show();
                }
                else{
                    Toast.makeText(MainActivity.this, "Password Worng\nTry Again", Toast.LENGTH_LONG).show();
                }
            }
        });
    }


}