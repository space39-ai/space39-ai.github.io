/******************************************************************************

                              Online C++ Compiler.
               Code, Compile, Run and Debug C++ program online.
Write your code in this editor and press "Run" button to compile and execute it.

*******************************************************************************/

#include <iostream>
#include <vector>
#include <algorithm>
#include <cmath> 

using namespace std;

int A[100][100];

int sum_m()
{
    int sum = 0;
    for (int i = 0; i < 100; i++)
    {
        for (int j = 0; j < 100; j++)
        {
            sum += A[i][j];
        }
    }
    return sum;
}
bool check_life(int i, int j)
{
    bool fl = false;
    int sum = 0;
    if (i > 98 || j > 98) return false;
    if (A[i][j] == 1) return false;
    sum = A[i - 1][j - 1] + A[i - 1][j] + A[i - 1][j + 1] +
          A[i][j - 1] + A[i][j + 1] +
          A[i + 1][j - 1] + A[i + 1][j] + A[i + 1][j + 1];
    if (sum == 3) return true; else return false;
}

bool need_die()
{
    
}

int main()
{
    
    for (int i = 0; i < 5; i++)
    {
        for (int j = 0; j < 7; j++)
        {
            char ch;
            cin >> ch;
            if (ch == 'X')
                A[45 + i][45 + j] = 1;
            else
                A[45 + i][45 + j] = 0;
        }
    }
    
    for (int i = 0; i < 100; i++)
    {
        for (int j = 0; j < 100; j++)
        {
            if (check_life(i, j))
            {
                cout << i - 45 << " " << j - 45 << endl;
                cout << endl;
            }
        }
       
    }
    return 0;
}
