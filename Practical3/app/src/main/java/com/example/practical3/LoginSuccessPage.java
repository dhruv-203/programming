package com.example.practical3;

import android.os.Bundle;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ArrayAdapter;
import android.widget.ListView;
import android.widget.TextView;

import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.appcompat.app.AppCompatActivity;

public class LoginSuccessPage extends AppCompatActivity {
    ListView container;
    TextView label, item;
    String[] values,titles;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login_success_page);
        container = findViewById(R.id.container);
        values = new String[10];
        titles = new String[]{"Username: ","Email: ","Phone Number: ","Country: ","State: ","Interest: ","Birth Date: ", "Birth Time: "};
        values = getIntent().getStringArrayExtra("values");
        ArrayAdapter adapter = new ArrayAdapter(LoginSuccessPage.this,R.layout.listitem,values){
            @NonNull
            @Override
            public View getView(int position, @Nullable View convertView, @NonNull ViewGroup parent) {
                convertView = getLayoutInflater().inflate(R.layout.listitem,parent,false);
                label = convertView.findViewById(R.id.label);
                item = convertView.findViewById(R.id.value);
                label.setText(titles[position]);
                item.setText(values[position]);
                return convertView;
            }
        };
    container.setAdapter(adapter);
    }
}