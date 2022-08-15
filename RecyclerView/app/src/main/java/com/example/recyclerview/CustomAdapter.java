package com.example.recyclerview;

import android.app.AlertDialog;
import android.app.Dialog;
import android.content.Context;
import android.graphics.drawable.Drawable;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ImageView;
import android.widget.TextView;
import android.widget.Toast;

import androidx.annotation.NonNull;
import androidx.cardview.widget.CardView;
import androidx.recyclerview.widget.RecyclerView;

import com.google.android.material.floatingactionbutton.FloatingActionButton;

import java.util.ArrayList;

public class CustomAdapter extends RecyclerView.Adapter<CustomAdapter.ViewHolder> {
Context context;
String choice;
Button delete,update;
View view;
ArrayList<DataStructure> Structure;
    public CustomAdapter(Context context,String choice,ArrayList<DataStructure> structure){
        this.context= context;
        this.choice = choice;
        this.Structure = structure;
    }

    @NonNull
    @Override
    public ViewHolder onCreateViewHolder(@NonNull ViewGroup parent, int viewType) {
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
        Dialog choosedialog = new Dialog(context);
        choosedialog.setTitle("Choose Action!!!");
        choosedialog.setContentView(R.layout.action_chooser);
        holder.row.setOnLongClickListener(new View.OnLongClickListener() {
            @Override
            public boolean onLongClick(View view) {
                choosedialog.show();
                update = choosedialog.findViewById(R.id.update);
                update.setOnClickListener(new View.OnClickListener() {
                    @Override
                    public void onClick(View view) {
                        choosedialog.dismiss();
                        update(holder,holder.getLayoutPosition());
                    }
                });
                delete = choosedialog.findViewById(R.id.delete);
                delete.setOnClickListener(new View.OnClickListener() {
                    @Override
                    public void onClick(View view) {
                        choosedialog.dismiss();
                        delete(holder.getLayoutPosition());
                    }
                });
                return true;
            }
        });
    }
void update(ViewHolder holder,int position){
        Dialog updatedialog = new Dialog(context);
        updatedialog.setContentView(R.layout.add_update);
        TextView title;
        EditText uname,unumber;
        Button action;
        int img;
        title = updatedialog.findViewById(R.id.alertTitle);
        img = Structure.get(position).img;
        uname = updatedialog.findViewById(R.id.uname);
        unumber = updatedialog.findViewById(R.id.unumber);
        action = updatedialog.findViewById(R.id.action);
        title.setText("Edit Following Details To Update the Item");
        uname.setText(holder.name.getText().toString());
        unumber.setText(holder.number.getText().toString());
        updatedialog.show();
        action.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                if(!(uname.getText().toString().equals("")||unumber.getText().toString().equals(""))){
//                    holder.name.setText(uname.getText().toString());
//                    holder.number.setText(unumber.getText().toString());
                    //we can do with above method to but it won't change the array list instead it just updates on the runtime
                    // since here as we haven't linked any database we can use above

                    Structure.set(position,new DataStructure(img,uname.getText().toString(),unumber.getText().toString()));
                    notifyDataSetChanged();
                    updatedialog.dismiss();
                }
                else{
                    Toast.makeText(context, "One of the Field is Empty", Toast.LENGTH_SHORT).show();
                }
            }
        });
}

void delete(int position){
        Structure.remove(position);
        notifyItemRemoved(position);
}

    @Override
    public int getItemCount() {
        return Structure.size();
    }

    public class ViewHolder extends RecyclerView.ViewHolder{
        ImageView img;
        TextView name,number;
        CardView row;
        public ViewHolder(View viewItem){
            super(viewItem);
            if(choice.equals("linear")){
                this.img = viewItem.findViewById(R.id.img);
                this.name= viewItem.findViewById(R.id.name);
                this.number=viewItem.findViewById(R.id.number);
                this.row = viewItem.findViewById(R.id.row);
            }
            else{
                this.img = viewItem.findViewById(R.id.Gimg);
                this.name= viewItem.findViewById(R.id.Gname);
                this.number=viewItem.findViewById(R.id.Gnumber);
                this.row = viewItem.findViewById(R.id.grow);
            }
        }

    }
}
