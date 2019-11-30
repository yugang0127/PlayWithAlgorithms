package Sorting;

import java.util.Arrays;

public class BubbleSort {
    public static void main(String[] args) {
        int[] a = new int[]{1, 8, 5, 2, 3, 9, 100, 51};
        bubbleSort(a, 8);
        System.out.println(Arrays.toString(a));
    }

    public static void bubbleSort(int[] a, int n) {
        for (int i = 0; i < n; i++) {
            boolean flag = false; // 提前退出标志位
            for (int j = 0; j < n - i - 1; j++) {
                if (a[j] > a[j + 1]) {
                    int temp = a[j];
                    a[j] = a[j + 1];
                    a[j + 1] = temp;
                    flag = true;
                }
            }
            if (!flag) break;
        }
    }
}
