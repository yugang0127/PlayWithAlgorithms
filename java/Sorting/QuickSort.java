package Sorting;

import java.util.Arrays;

public class QuickSort {

    public static void main(String[] args) {
        int[] a = new int[]{1, 8, 5, 2, 3, 9, 100, 51};
        quickSort(a, 0, a.length - 1);
        System.out.println(Arrays.toString(a));
    }


    public static void quickSort(int[] arr, int begin, int end) {
        if (end <= begin) return;
        int pivot = partition(arr, begin, end);
        quickSort(arr, begin, pivot - 1);
        quickSort(arr, pivot + 1, end);
    }

    public static int partition(int[] arr, int begin, int end) {
        int pivot = arr[end], mark = begin;
        for (int i = begin; i < end; i++) {
            if (arr[i] < pivot) {
                int temp = arr[mark];
                arr[mark] = arr[i];
                arr[i] = temp;
                mark++;
            }
        }
        arr[end] = arr[mark];
        arr[mark] = pivot;
        return mark;
    }
}
