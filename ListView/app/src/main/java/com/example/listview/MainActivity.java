package com.example.listview;

import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.appcompat.app.AppCompatActivity;

import android.content.Context;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ArrayAdapter;
import android.widget.ImageView;
import android.widget.ListAdapter;
import android.widget.ListView;
import android.widget.TextView;

import java.util.ArrayList;
import java.util.List;

public class MainActivity extends AppCompatActivity {
    ListView listview;
    String[] arr = {"Dhruv","Ayush","Neel","Bk","Jeel","Harsh","Ammar","Mohit"};
    int[] imglist = {R.drawable.img, R.drawable.img_1, R.drawable.img_2, R.drawable.img_3, R.drawable.img_4, R.drawable.img_5, R.drawable.img_6, R.drawable.img_7};

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        listview = findViewById(R.id.list);
        ArrayAdapter ad = new ArrayAdapter(this,R.layout.adpater_design,arr){
            @NonNull
            @Override
            public View getView(int position, @Nullable View convertView, @NonNull ViewGroup parent) {
                    convertView = getLayoutInflater().inflate(R.layout.adpater_design,parent,false);
                    ImageView img = convertView.findViewById(R.id.imageView);
                    TextView text= convertView.findViewById(R.id.textView);
                    img.setImageResource(imglist[position]);
                    text.setText(arr[position]);
                return convertView;
            }
        };
        listview.setAdapter(ad);

    }
}