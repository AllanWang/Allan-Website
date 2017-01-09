const FULL_NAME = 0, CODE_TRIPLE = 1, CODE_SINGLE = 2;

/*
 * E electrical, P positive, N negative
 * P polar uncharged
 * H hydrophobic
 * S special
 */
const SC_E_P = 0, SC_E_N = 1, SC_P = 2, SC_H = 3, SC_S = 4;

exports.aminoAcids = [
    {
        "name": ["alanine", "ala", "A"],
        "side_chain": SC_H
    },
    {
        "name": ["arginine", "arg", "R"],
        "side_chain": SC_E_P
    },
    {
        "name": ["asparagine", "asn", "N"],
        "side_chain": SC_P
    },
    {
        "name": ["aspartic acid", "asp", "D"],
        "side_chain": SC_E_N
    },
    {
        "name": ["cysteine", "cys", "C"],
        "side_chain": SC_S
    },
    {
        "name": ["glutamine", "gln", "Q"],
        "side_chain": SC_P
    },
    {
        "name": ["glutamic acid", "glu", "E"],
        "side_chain": SC_E_N
    },
    {
        "name": ["glycine", "gly", "G"],
        "side_chain": SC_S
    },
    {
        "name": ["histidine", "his", "H"],
        "side_chain": SC_E_P
    },
    {
        "name": ["isoleucine", "ile", "I"],
        "side_chain": SC_H
    },
    {
        "name": ["leucine", "leu", "L"],
        "side_chain": SC_H
    },
    {
        "name": ["lysine", "lys", "K"],
        "side_chain": SC_E_P
    },
    {
        "name": ["methionine", "met", "M"],
        "side_chain": SC_H
    },
    {
        "name": ["phenylalanine", "phe", "F"],
        "side_chain": SC_H
    },
    {
        "name": ["proline", "pro", "P"],
        "side_chain": SC_S
    },
    {
        "name": ["serine", "ser", "S"],
        "side_chain": SC_P
    },
    {
        "name": ["threonine", "thr", "T"],
        "side_chain": SC_P
    },
    {
        "name": ["tryptophan", "trp", "W"],
        "side_chain": SC_H
    },
    {
        "name": ["tyrosine", "tyr", "Y"],
        "side_chain": SC_H
    },
    {
        "name": ["valine", "val", "V"],
        "side_chain": SC_H
    }
];