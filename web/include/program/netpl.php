<ul class="program" data-role="listview" data-filter="true" data-inset="true" data-theme="d" data-dividertheme="a" data-filter-placeholder="Filter program...">
    <?php tprog_add_header("Monday, August 22, 2016"); ?>
    
    <?php
           tprog_add_talk("The Next 700 Network Programming Languages",
                          "Nate Foster (Cornell University)",
                          "Specification and verification of computer networks has become a reality in recent years, with the emergence of domain-specific programming languages and automated verification tools. But the design of these languages and tools has been largely ad hoc, driven more by the needs of applications and the capabilities of hardware than by any foundational principles. This talk will present NetKAT, a language for programming networks based on a well-studied mathematical foundation, Kleene Algebra with Tests (KAT). The talk will describe the design of the language, its semantic underpinnings, and extensions with features to support stateful and probabilistic programming.<br/><br/>
                          NetKAT is joint work with colleagues at Cornell, Facebook, Inhabited Type, Princeton, Samsung, UCL, and UMass Amherst.",
                          "Nate Foster is an Assistant Professor of Computer Science at Cornell University. The goal of his search is developing programming languages and tools for building reliable systems. He received a PhD in Computer Science from theUniversity of Pennsylvania in 2009, an MPhil in History and Philosophy of Science from Cambridge University in 2008, and a BA in Computer Science from Williams College in 2001. His awards include a Sloan Research Fellowship, an NSF CAREER Award, a Most Influential POPL Paper Award, a Tien &#39;72 Teaching Award, a Google Research Award, a Yahoo! Academic Career Enhancement Award, and the Morris and Dorothy Rubinoff Award.",
                          "images/program/netpl/nate-foster.png");
         
           tprog_add_talk("The ONF Intermediate Representation for Networking-specific Programming Languages",
                          "Gordon Brebner (Xilinx, Inc.)",
                          "There has been much recent research around domain-specific programming languages for packet processing, notably the P4 language. There is a wide variety of targets for such languages, including CPUs, various NPUs, programmable switch chips, and FPGAs. Following established practice in normal programming language compilation to avoid the m*n proliferation of compilers for m languages to n targets, through the use of intermediate representations such as LLVM, the Open Networking Foundation started the PIF (Protocol Independent Forwarding) activity to define a domain-specific intermediate representation for networking. This talk will review the work of the PIF group, and discuss the candidate intermediate representation (BIR: the &quot;B&quot; Intermediate Representation) that has been developed.",
                          "Prof. Gordon Brebner is a Distinguished Engineer at Xilinx, Inc., the world&#39;s leading provider of all-programmable FPGAs and SoCs. He works in Xilinx Labs, leading an international group researching issues surrounding networked processing systems of the future. His main personal research interests concern dynamically reconfigurable architectures, domain-specific languages with highly concurrent implementations, and high performance networking. Most recently, his research has led to the Xilinx SDNet product for SDN and NFV at 100G+ rates. He holds around 40 patents and has published around 60 papers in the general area of networking with FPGAs. Prior to joining Xilinx in 2002, he was the Professor of Computer Systems and Head of the Department of Computer Science at the University of Edinburgh. He is currently co-chair of the P4 Language Design working group in P4.org, and chair of the Protocol Independent Forwarding working group in the Open Networking Foundation.",
                          "images/program/netpl/Gordon_Brebner.jpg");

           tprog_add_talk("Temporal NetKAT",
                          "David Walker (Princeton University)",
                          "To be announced.",
                          "David Walker is a Professor of Computer Science at Princeton University. He received his B.Sc. from Queen&#39;s University, Canada in 1995 and his Ph.D. in Computer Science from Cornell University in 2001. His research interests include programming language theory, design and implementation of all kinds. He is especially interested in type systems and the development of new domain-specific programming languages. He won an NSF Career award in 2003 and Alfred Sloan Fellowship in 2004. In 2007, with his students and colleagues at Princeton, he won the PLDI best paper award for the paper entitled Fault-Tolerant Typed Assembly Language. In 2008, his paper From System F to Typed Assembly Language, co-authored with Greg Morrisett, Karl Crary and Neal Glew, won a 10-year retrospective award for most influential POPL 1998 paper. In 2013, with his students and colleagues at Princeton and Cornell, he won the NSDI community award for his paper on Composing Software-Defined Networks. He served as an associate editor for ACM TOPLAS from 2007-2015, as the Program Chair for POPL 2015, and won the ACM SIGPLAN Robin Milner Young Researcher Award in 2015.",
                          "images/program/netpl/david-walker.jpg");

           tprog_add_talk("Interactive Query for Dynamic Network Analytics",
                          "Haoyu Song (Huawei Technologies)",
                          "Network data plane needs to be interactively programmed in order to support Dynamic Network Analytics (DNA). We envision the high level DNA applications can be break down into a set of queries and the queries can be further compiled into incremental configurations to the data plane. We emphasize the need to define standard DNA APIs and/or query language for DNA system.",
                          "Haoyu Song is a principal architect at Huawei Technologies. He is a leading researcher on SDN programmable data plane. His current research interests span all aspects of the SDN/NFV ecosystem. He was a researcher at Bell Labs, Alcatel-Lucent before joining Huawei. He hold a doctoral degree in computer engineering from Washington University in St. Louis.",
                          "images/program/netpl/haoyu-song.jpg");

           tprog_add_talk("Verifying Reachability in Networks with Mutable Datapaths",
                          "Aurojit Panda (UC Berkeley)",
                          "Recent work has made great progress in verifying the forwarding correctness of networks. However, these approaches cannot be used to verify networks containing middleboxes, such as caches and firewalls, whose forwarding behavior depends on previously observed traffic. We explore how to verify reachability properties for networks that include such &quot;mutable datapath&quot; elements. We want our verification results to hold not just for the given network, but also in the presence of failures. The main challenge lies in scaling the approach to handle large and complicated networks, We address by developing and leveraging the concept of slices, which allow network-wide verification to only require analyzing small portions of the network. We show that with slices the time required to verify an invariant on many production networks is independent of the size of the network itself.",
                          "Aurojit Panda is a PhD candidate at UC Berkeley advised by Scott Shenker. His research largely focuses on how to simplify developing and deploying new network services.",
                          "images/program/netpl/aurojit-panda.jpg");

           tprog_add_talk("NEMO Engine, A Model Driven Compiler to Execute User&#39;s Intent and Manage Service Lifecycle by Multi Layer State Machine",
                          "Yinben Xia (Huawei Technologies)",
                          "In last year&#39;s NetPL workshop, I introduced an intent oriented network service programming language - NEMO. This time, I will introduce NEMO&#39;s model driven compiler, which compiles intent language to real network executable interface. Second, I will introduce a multi layer state machine engine in NEMO compiler, which will handle various changes from equipments, requirement or governance policy. This engine provides an automatic change management capability for whole service lifecycle. In the last, I will update NEMO&#39;s open source implementation progress.",
                          "Dr. Yinben Xia is a senior staff researcher within Huawei&#39;s network research department from 2008. He dedicated his research effort in network architecture and SDN technologies. In recent two years, he lead a team to design and developer a NaaS (Network as a Service) programming language (NEMO Project). He owns 15 patents in related domain. He is leading a team to carry out SDN/NEMO research in Beijing. Before joining Huawei, Dr. Xia worked at IBM China Research Lab for 4 years after he got PH.D from Beijing University of Aeronautics and Astronautics.",
                          "images/program/netpl/yinben-xia.jpg");

      tprog_add_item("Towards Correct-by-Construction SDN", "", "Leonid Ryzhyk (Samsung Research America), Nikolaj Bjorner (Microsoft Research), Marco Canini (Universit&eacute; catholique de Louvain), Jean-Baptiste Jeannin, Nina Narodytska, Cole Schlesinger, Douglas B. Terry (Samsung Research America), George Varghese (Microsoft Research)", "", "", "");
      
      tprog_add_item("Formal Semantics and Automated Verification for the Border Gateway Protocol", "", "Konstantin Weitz, Doug Woos, Emina Torlak, Michael D. Ernst, Arvind Krishnamurthy, Zachary Tatlock (University of Washington)", "", "", "");

      tprog_add_item("P4FPGA: High-Level Synthesis for Networking", "", "Han Wang, Ki Suh Lee, Vishal Shrivastav, Hakim Weatherspoon (Cornell University)", "", "", "");

      tprog_add_item("Symbolic Execution &mdash; Model Equivalence &amp; Applications", "", "Matei Popovici, Radu Stoenescu, Lorina Negreanu, Costin Raiciu (University Politehnica of Bucharest)", "", "", "");
    
    ?>

</ul>
