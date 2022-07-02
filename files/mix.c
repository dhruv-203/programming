 #include <stdio.h>

int main()
{
    int n;
    printf("Enter the number of the students: ");
    scanf("%d", &n);
    struct student
    {
        char name[50];
        int rollno;
        int class;
        char div;
    };
    struct marks
    {
        struct student det[n];
        int maths;
        int science;
        int english;
    }st;
    for (int i = 0; i < n; i++)
    {
        if(i==0)
        printf("PERSONAL DETAILS: \n\n");
        printf("Enter your Name: ");
        scanf("\n%[^\n]s", st.det[i].name);
        printf("Enter your Roll No.: ");
        scanf("%d", st.det[i].rollno);
        printf("Enter your standard: ");
        scanf("%d", st.det[i].class);
        printf("Enter your Division: ");
        scanf("%c", st.det[i].div);
        printf("\n\nENTER YOUR MARKS: \n\n");
        printf("Enter your marks in Maths: ");
        scanf("%d", &st.maths);
        printf("Enter your marks in Science: ");
        scanf("%d", &st.science);
        printf("Enter your marks in English: ");
        scanf("%d", &st.english);
        
    }
    return 0;
}