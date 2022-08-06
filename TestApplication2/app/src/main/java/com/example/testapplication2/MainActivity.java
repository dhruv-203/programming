package com.example.testapplication2;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.view.ViewGroup;
import android.widget.BaseAdapter;
import android.widget.ImageView;
import android.widget.ListView;

import java.util.ArrayList;
import java.util.List;

public class MainActivity extends AppCompatActivity {
    int[] li ;
    ListView list;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        list = findViewById(R.id.list);
        li = new int[]{R.drawable.img1,R.drawable.img2,R.drawable.img3,R.drawable.img4,R.drawable.img5,R.drawable.img6,R.drawable.img7,R.drawable.img8,R.drawable.img9,R.drawable.img10,R.drawable.img11,R.drawable.img12,R.drawable.img13,R.drawable.img14,R.drawable.img15,R.drawable.img16,R.drawable.img17,R.drawable.img18};
//        li = new String[18];
        BaseAdapter ad = new BaseAdapter() {
            @Override
            public int getCount() {
                return li.length;
            }

            @Override
            public Object getItem(int i) {
                return li[i];
            }

            @Override
            public long getItemId(int i) {
                return Long.parseLong(String.valueOf(i));
            }

            @Override
            public View getView(int i, View view, ViewGroup viewGroup) {
                View inflater = getLayoutInflater().inflate(R.layout.listview_ticket,viewGroup, false);
                ImageView img = inflater.findViewById(R.id.imgcont);
                img.setImageResource(li[i]);

                return inflater;
            }

        };
        list.setAdapter(ad);
    }
}