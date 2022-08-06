package com.example.progressbar;

import androidx.appcompat.app.AppCompatActivity;

import android.app.AlertDialog;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.ProgressBar;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {
    Button button;
    TextView num,percent;
    AlertDialog box;
    int i;
    ProgressBar prog;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        button = findViewById(R.id.button);
        AlertDialog.Builder alertdialog = new AlertDialog.Builder(MainActivity.this);
        alertdialog.setTitle("Loading.....");
        View inflater = getLayoutInflater().inflate(R.layout.progressdialog,null);
        num= inflater.findViewById(R.id.num);
        percent = inflater.findViewById(R.id.percent);
        prog = inflater.findViewById(R.id.prog);
        num.setText("0/100");
        prog.setMax(100);
        percent.setText("0%");
        alertdialog.setView(inflater);
        box = alertdialog.create();
        button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                box.show();
                Thread thread = new Thread(new Runnable() {
                    @Override
                    public void run() {
                        i=0;
                        while(i<85){
                            prog.setProgress(i++);
                            runOnUiThread(new Runnable() {
                                @Override
                                public void run() {
                                    num.setText(i+"/100");
                                    percent.setText(i+"%");
                                }
                            });
                            try {
                                Thread.sleep(500);
                            }catch (InterruptedException e){}
                        }
                        box.dismiss();
                    }
                });
                thread.start();
            }
        });
    }
}