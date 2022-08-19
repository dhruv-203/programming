package com.example.assingment_445;

import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.appcompat.app.AppCompatActivity;

import android.content.Context;
import android.os.Bundle;
import android.view.Display;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.view.WindowManager;
import android.widget.ArrayAdapter;
import android.widget.LinearLayout;
import android.widget.ListView;
import android.widget.TextView;

import java.util.ArrayList;

public class Results extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_results);
        Object[] items = new Object[6];
       ListView container = findViewById(R.id.container);
       items = (Object[]) getIntent().getSerializableExtra("objects");
        ArrayAdapter adapter = new ArrayAdapter(Results.this,R.layout.list_item,items){
            @NonNull
            @Override
            public View getView(int position, @Nullable View convertView, @NonNull ViewGroup parent) {
                convertView = getLayoutInflater().inflate(R.layout.list_item,parent,false);
                LinearLayout ll = convertView.findViewById(R.id.ll);
                TextView Title = convertView.findViewById(R.id.cardTitle);
                Title.setText(((ArrayList<String>) getItem(position)).get(0));
                TextView addTv;
                for(int i=1;i<((ArrayList<String>) getItem(position)).size();i++){
                    addTv = new TextView(Results.this);
                    addTv.setText(((ArrayList<String>) getItem(position)).get(i));
                    addTv.setPadding(10,15,0,5);
                    LinearLayout.LayoutParams params = new LinearLayout.LayoutParams(LinearLayout.LayoutParams.MATCH_PARENT,LinearLayout.LayoutParams.WRAP_CONTENT);
                    addTv.setLayoutParams(params);
                    addTv.setTextAlignment(addTv.TEXT_ALIGNMENT_CENTER);
                    ll.addView(addTv);
                }
                return convertView;
            }

        };
        container.setAdapter(adapter);
    }
}