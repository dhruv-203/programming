package com.wht3v3r.adapter;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Context;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.BaseAdapter;
import android.widget.ListView;
import android.widget.TextView;
import android.widget.Toast;

import java.util.ArrayList;
import java.util.List;

public class MainActivity extends AppCompatActivity {

    ListView listView;
    List<String> names = new ArrayList<String>();


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        listView = findViewById(R.id.ListView);

        BaseAdapter listAdapter = new BaseAdapter() {
            @Override
            public int getCount() {
               return names.size();
            }

            @Override
            public Object getItem(int i) {
                return names.get(i);
            }

            @Override
            public long getItemId(int i) {
                return Long.parseLong(String.valueOf(i));
            }

            @Override
            public View getView(int i, View view, ViewGroup viewGroup) {
                View inflater = getLayoutInflater().inflate(R.layout.listview_ticket, null);
                TextView titleView = inflater.findViewById(R.id.title);
                titleView.setText(names.get(i));

                titleView.setOnClickListener(new View.OnClickListener() {
                    @Override
                    public void onClick(View view) {
                        Toast.makeText(MainActivity.this, String.valueOf(i+1), Toast.LENGTH_SHORT).show();
                    }
                });

                return inflater;
            }
        };
        listView.setAdapter(listAdapter);

        Thread thread = new Thread(new Runnable() {
            @Override
            public void run() {
                for (int i=0;i<20;i++) {
                    try {
                        Thread.sleep(1000);
                    } catch (InterruptedException e) {}
                    names.add("abcd");

                    runOnUiThread(new Runnable() {
                        @Override
                        public void run() {
                            listView.setAdapter(null);
                            listView.setAdapter(listAdapter);
                        }
                    });
                }
            }
        });

        thread.start();
    }
}