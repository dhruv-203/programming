package com.example.practical3;

import androidx.appcompat.app.AppCompatActivity;

import android.app.AlertDialog;
import android.app.DatePickerDialog;
import android.app.TimePickerDialog;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.AutoCompleteTextView;
import android.widget.Button;
import android.widget.DatePicker;
import android.widget.EditText;
import android.widget.Spinner;
import android.widget.TextView;
import android.widget.TimePicker;
import android.widget.Toast;

import java.util.Calendar;

public class MainActivity extends AppCompatActivity {
    Spinner select;
    EditText usname,pass,email,phone;
    TextView date,time;
    AutoCompleteTextView country,state;
    Button submit;
    String dropvalue;
    Intent intent;
    String[] container;
    String[][] States;
    String[] Country;
    int countryPos =100;
    ArrayAdapter autoCompleteStates;

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
        Country = new String[]{"India","England","USA","Dubai","Russia","Indonesia"};
        States = new String[][]{
            {"Andhra Pradesh", "Arunachal Pradesh","Assam" ,"Bihar" ,"Goa","Gujarat", "Haryana", "Himachal Pradesh", "Jammu & Kashmir", "Karnataka", "Kerala", "Madhya Pradesh","Maharashtra", "Manipur", "Meghalaya", "Mizoram", "Nagaland", "Orissa", "Punjab", "Rajasthan", "Sikkim" ,"Tamil Nadu", "Tripura", "Uttar Pradesh", "West Bengal", "Uttarakhand", "Jharkhand", "Telangana"},
            {"Bedfordshire","Berkshire","Bristol","Buckinghamshire","Cambridgeshire","Cheshire","City of London","Cornwall","Cumbria","Derbyshire","Devon","Dorset","Durham","East Riding of Yorkshire","East Sussex","Essex","Gloucestershire","Greater London","Greater Manchester","Hampshire","Herefordshire","Hertfordshire","Isle of Wight","Kent","Lancashire","Leicestershire","Lincolnshire","Merseyside","Norfolk","North Yorkshire","Northamptonshire","Northumberland","Nottinghamshire","Oxfordshire","Rutland","Shropshire","Somerset","South Yorkshire","Staffordshire","Suffolk","Surrey","Tyne and Wear","Warwickshire","West Midlands","West Sussex","West Yorkshire","Wiltshire","Worcestershire"}
        };

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
        ArrayAdapter autoCompleteCountry = new ArrayAdapter(MainActivity.this, android.R.layout.simple_spinner_dropdown_item,Country);
        country.setAdapter(autoCompleteCountry);
        country.setThreshold(1);
        state.setOnFocusChangeListener(new View.OnFocusChangeListener() {
            @Override
            public void onFocusChange(View view, boolean b) {
                if(country.getText().toString().equals("India")){
                    autoCompleteStates = new ArrayAdapter(MainActivity.this,android.R.layout.simple_selectable_list_item,States[0]);
                    state.setAdapter(autoCompleteStates);
                    state.setThreshold(0);
                }
                else if(country.getText().toString().equals("England")){
                    autoCompleteStates = new ArrayAdapter(MainActivity.this,android.R.layout.simple_selectable_list_item,States[1]);
                    state.setAdapter(autoCompleteStates);
                    state.setThreshold(0);
                }
                else{
                    autoCompleteStates = null;
                    state.setAdapter(autoCompleteStates);
                }
            }
        });
        date.setOnClickListener(new View.OnClickListener() {

            @Override
            public void onClick(View view) {
                int mday,mmonth,myear;
                final Calendar calendar = Calendar.getInstance();
                mday = calendar.get(Calendar.DAY_OF_MONTH);
                mmonth = calendar.get(Calendar.MONTH);
                myear=calendar.get(Calendar.YEAR);

                DatePickerDialog datePickerDialog = new DatePickerDialog(MainActivity.this, new DatePickerDialog.OnDateSetListener() {
                    @Override
                    public void onDateSet(DatePicker datePicker, int i, int i1, int i2) {
                        String selectedDate = i2 + "/" + (i1+1) + "/" +i ;
                        date.setText(selectedDate);
                    }
                },myear,mmonth,mday);
                datePickerDialog.show();
            }
        });
        time.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                int hour,min;
                Calendar calendar = Calendar.getInstance();
                hour = calendar.get(Calendar.HOUR_OF_DAY);
                min = calendar.get(Calendar.MINUTE);
                TimePickerDialog timePickerDialog = new TimePickerDialog(MainActivity.this, new TimePickerDialog.OnTimeSetListener() {
                    @Override
                    public void onTimeSet(TimePicker timePicker, int i, int i1) {
                        String selectedTime;
                        if(i>12){
                            selectedTime= (i-12)+" : "+i1+ "  PM";
                        }
                        else if(i==12){
                            selectedTime = i + " : "+i1+"  PM";
                        }
                        else if(i==24){
                            selectedTime = "0"+ " : "+i1 +"  AM";
                        }
                        else{
                            selectedTime= (i)+" : "+i1+"  AM";
                        }
                        time.setText(selectedTime);
                    }
                },hour,min,false);
                timePickerDialog.show();
            }
        });
        submit= findViewById(R.id.Submit);
        submit.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                if(pass.getText().toString().equals("D H R U V")){

                    container = new String[]{usname.getText().toString(),email.getText().toString(),phone.getText().toString(),country.getText().toString(),state.getText().toString(),dropvalue,date.getText().toString(),time.getText().toString()};
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