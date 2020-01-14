/*
 * Academic License - for use in teaching, academic research, and meeting
 * course requirements at degree granting institutions only.  Not for
 * government, commercial, or other organizational use.
 *
 * xscal.h
 *
 * Code generation for function 'xscal'
 *
 */

#ifndef XSCAL_H
#define XSCAL_H

/* Include files */
#include <stddef.h>
#include <stdlib.h>
#include "rtwtypes.h"
#include "indefinite_solve_types.h"

/* Function Declarations */
extern void b_xscal(double a, double x_data[], int ix0);
extern void c_xscal(int n, double a, emxArray_real_T *x, int ix0);
extern void xscal(int n, double a, emxArray_real_T *x, int ix0);

#endif

/* End of code generation (xscal.h) */