package com.example.recyclerview;

import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.GridLayoutManager;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.StaggeredGridLayoutManager;

import android.os.Bundle;
import android.widget.LinearLayout;

import java.util.ArrayList;

public class RecyclerView extends AppCompatActivity {
    String choice;
androidx.recyclerview.widget.RecyclerView container ;
ArrayList<DataStructure> structure = new ArrayList<>();
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_recycler_view);
        choice = getIntent().getStringExtra("choice");
        container = findViewById(R.id.container);
        structure.add(new DataStructure(R.drawable.person1img,"Mr. Anonymous","6876435135"));
        structure.add(new DataStructure(R.drawable.person2img,"Donald Duck","68745651356"));
        structure.add(new DataStructure(R.drawable.person3img,"Mr. ScaryGuy","6879832135"));
        structure.add(new DataStructure(R.drawable.person4img,"Mr. DOGO","6876435987"));
        structure.add(new DataStructure(R.drawable.person5img,"Gal Gadot","6876439878"));
        structure.add(new DataStructure(R.drawable.person6img,"Brian","6876864135"));
        structure.add(new DataStructure(R.drawable.person7img,"Steve","6878785135"));
        structure.add(new DataStructure(R.drawable.person8img,"Bhuvan","6876498735"));
        structure.add(new DataStructure(R.drawable.person9img,"Stefan Strange","6876321235"));
        structure.add(new DataStructure(R.drawable.person10img,"Chadwik","6876321235"));
        structure.add(new DataStructure(R.drawable.person11img,"Emily","6876321235"));
        structure.add(new DataStructure(R.drawable.person12img,"Lucia","6876321235"));
        structure.add(new DataStructure(R.drawable.person13img,"Kay","6876321235"));
        structure.add(new DataStructure(R.drawable.person14img,"Hella Jones","6876321235"));
        structure.add(new DataStructure(R.drawable.person15img,"Sadie Sink","6876321235"));

        if(choice.equals("linear")){
            container.setLayoutManager(new LinearLayoutManager(RecyclerView.this));
        }
        else if(choice.equals("grid")){
            container.setLayoutManager(new GridLayoutManager(RecyclerView.this,2));
        }
        else{
            container.setLayoutManager(new StaggeredGridLayoutManager(3,StaggeredGridLayoutManager.VERTICAL));
        }
    CustomAdapter adapter = new CustomAdapter(RecyclerView.this,choice,structure);
        container.setAdapter(adapter);
    }
}