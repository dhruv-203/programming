package com.example.recyclerview;

import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;
import android.widget.TextView;

import androidx.annotation.NonNull;
import androidx.recyclerview.widget.RecyclerView;

import java.util.ArrayList;

public class CustomAdapter extends RecyclerView.Adapter<CustomAdapter.ViewHolder> {
Context context;
String choice;
ArrayList<DataStructure> Structure;
    public CustomAdapter(Context context,String choice,ArrayList<DataStructure> structure){
        this.context= context;
        this.choice = choice;
        this.Structure = structure;
    }

    @NonNull
    @Override
    public ViewHolder onCreateViewHolder(@NonNull ViewGroup parent, int viewType) {
    View view;
        if(choice.equals("linear")){
       view = LayoutInflater.from(context).inflate(R.layout.recycle_item_layout,parent,false);
    }
    else{
        view = LayoutInflater.from(context).inflate(R.layout.grid_staggered_layout,parent,false);
    }
        ViewHolder viewHolder = new ViewHolder(view);

        return viewHolder;
    }

    @Override
    public void onBindViewHolder(@NonNull ViewHolder holder, int position) {
        holder.img.setImageResource(Structure.get(position).img);
        holder.name.setText(Structure.get(position).name);
        holder.number.setText(Structure.get(position).number);
    }

    @Override
    public int getItemCount() {
        return Structure.size();
    }

    public class ViewHolder extends RecyclerView.ViewHolder{
        ImageView img;
        TextView name,number;
        public ViewHolder(View viewItem){
            super(viewItem);
            if(choice.equals("linear")){
                this.img = viewItem.findViewById(R.id.img);
                this.name= viewItem.findViewById(R.id.name);
                this.number=viewItem.findViewById(R.id.number);
            }
            else{
                this.img = viewItem.findViewById(R.id.Gimg);
                this.name= viewItem.findViewById(R.id.Gname);
                this.number=viewItem.findViewById(R.id.Gnumber);
            }
        }

    }
}
