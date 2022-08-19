package com.example.assingment_445;

import androidx.appcompat.app.AppCompatActivity;

import android.app.DatePickerDialog;
import android.app.TimePickerDialog;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.CheckBox;
import android.widget.DatePicker;
import android.widget.ImageButton;
import android.widget.RadioButton;
import android.widget.RadioGroup;
import android.widget.TextView;
import android.widget.TimePicker;
import android.widget.Toast;
import android.widget.ToggleButton;

import java.util.ArrayList;
import java.util.Calendar;

public class MainActivity extends AppCompatActivity {
CheckBox chckpyhton,chckjava,chckdbms,chcksports;
ToggleButton toggle1,toggle2;
RadioButton rpython,rjava,rdbms,rsports;
RadioGroup rsubjects;
RadioButton selected;
ImageButton date,time;
Button submit;
ArrayList<String> checkboxdata, toggledata, radiobuttdata, radiogrpdata,datedata,timedata;
Object[] data;
TextView timeview, dateview;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        //initializing values

        chckpyhton=findViewById(R.id.SubjectPython);
        chckdbms=findViewById(R.id.SubjectDBMS);
        chckjava=findViewById(R.id.SubjectJava);
        chcksports=findViewById(R.id.SUBJECTSports);
        rpython = findViewById(R.id.Python);
        rjava=findViewById(R.id.Java);
        rdbms=findViewById(R.id.DBMS);
        rsports=findViewById(R.id.Sports);
        rsubjects=findViewById(R.id.rgroup);
        toggle1 = findViewById(R.id.ToggleButton1);
        toggle2=findViewById(R.id.ToggleButton2);
        submit=findViewById(R.id.submit);
        date=findViewById(R.id.date);
        time=findViewById(R.id.time);
        timeview=findViewById(R.id.timeview);
        dateview=findViewById(R.id.dateview);


        //datepickerDialog

        date.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                int day,month,year;
                Calendar calendar = Calendar.getInstance();
                day = calendar.get(Calendar.DAY_OF_MONTH);
                month = calendar.get(Calendar.MONTH);
                year=calendar.get(Calendar.YEAR);
                DatePickerDialog datePickerDialog = new DatePickerDialog(MainActivity.this, new DatePickerDialog.OnDateSetListener() {
                    @Override
                    public void onDateSet(DatePicker datePicker, int i, int i1, int i2) {
                        dateview.setText(i2+"/"+(i1+1)+"/"+i);


                    }
                },year,month,day);
                datePickerDialog.show();
            }
        });
                //timepickerDialog

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
                        timeview.setText(selectedTime);
                    }
                },hour,min,false);
            timePickerDialog.show();
            }
        });



        submit.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                // checkbox values
                checkboxdata = new ArrayList<>();
                checkboxdata.add("Check-Box Subjects: ");

                //getting checkbox values
                if(chckpyhton.isChecked()){
                    checkboxdata.add(chckpyhton.getText().toString());
                }
                if(chckjava.isChecked()){
                    checkboxdata.add(chckjava.getText().toString());
                }
                if(chckdbms.isChecked()){
                    checkboxdata.add(chckdbms.getText().toString());
                }
                if(chcksports.isChecked()){
                    checkboxdata.add(chcksports.getText().toString());
                }

                //Toggle button values

                toggledata = new ArrayList<>();
                toggledata.add("Toggle Button State: ");
                if(toggle1.isChecked()){
                    toggledata.add("Toggle Button 1 is : "+toggle1.getTextOn());
                }
                else{
                    toggledata.add("Toggle Button 1 is : "+toggle1.getTextOff());
                }
                if(toggle2.isChecked()) {
                    toggledata.add("Toggle Button 2 is : " + toggle2.getTextOn());
                }
                else{
                    toggledata.add("Toggle Button 2 is : " + toggle2.getTextOff());
                }
                // radioButton values

                radiobuttdata = new ArrayList<>();
                radiobuttdata.add("Selected Radio Buttons: ");
                if(rpython.isChecked()){
                    radiobuttdata.add(rpython.getText().toString());
                }
                if(rjava.isChecked()){
                    radiobuttdata.add(rjava.getText().toString());
                }
                if(rdbms.isChecked()){
                    radiobuttdata.add(rdbms.getText().toString());
                }
                if(rsports.isChecked()){
                    radiobuttdata.add(rsports.getText().toString());
                }

                //radioGroup value

                radiogrpdata = new ArrayList<>();
                radiogrpdata.add("Radio Group Selected value: ");
                selected = (RadioButton) findViewById(rsubjects.getCheckedRadioButtonId());
                if(selected!=null){
                    radiogrpdata.add(selected.getText().toString());
                }
                //date
                datedata = new ArrayList<>();
                datedata.add("Selected Date: ");
                datedata.add(dateview.getText().toString());

                //time
                timedata = new ArrayList<>();
                timedata.add("Selected Time: ");
                timedata.add(timeview.getText().toString());

                data = new Object[]{checkboxdata,toggledata,radiobuttdata,radiogrpdata,datedata,timedata};


                Intent intent = new Intent(MainActivity.this,Results.class);
                intent.putExtra("objects",data);
                startActivity(intent);
            }
        });
    }
}