package Sorting;

import java.util.Arrays;

public class MergeSort {

    public static void main(String[] args) {
        int[] a = new int[]{1, 8, 5, 2, 3, 9, 100, 51};
        mergeSort(a, 0, a.length - 1);
        System.out.println(Arrays.toString(a));
    }

    public static void mergeSort(int[] arr, int begin, int end) {
        if (end >= begin) return;
        int mid = begin + (end - begin) >> 1;
    }

    public static void merge(int[] arr, int begin, int mid, int end) {

    }
}
